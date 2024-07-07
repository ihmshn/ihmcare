<?php

namespace App\Http\Controllers\mortuary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mortuary\Mortuary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DateTime;

class MortuaryController extends Controller
{
    public function dashboard()
    {
        $this->updateDailyCharges();
        $depositCount = Mortuary::getAllDepositsCount();
        return view('mortuary.dashboard', ['depositCount' => $depositCount]);
        // return view('mortuary.dashboard');
    }

    public function corpse_deposit()
    {
        return view('mortuary.corpse_deposit');
    }


    public function corpse_depositInsert(Request $request)
    {

        $rules = [
            'branch_name' => 'required',
            'branch_address' => 'required',
            'branch_phone' => 'required',
            'other_branch_phone' => 'sometimes',
            'state' => 'sometimes'
        ];

        $this->validate($request, $rules);

        $min = 1;
        $max = 900000000;
        $number =  rand($min, $max);

        $branch_name  = $request->input('branch_name');
        $branch_address = $request->input('branch_address');
        $branch_phone = $request->input('branch_phone');
        $other_branch_phone = $request->input('other_branch_phone');
        $state = $request->input('state');

        $values = array(
            'branch_name' => $branch_name,
            'branch_address' => $branch_address,
            'branch_phone' => $branch_phone,
            'other_branch_phone' => $other_branch_phone,
            'state' => $state
        );

        $Execute = DB::table('outlets')->insert($values);
        if ($Execute == true) {
            return redirect()->back()->with('message1', 'Branch Created successfull');
        } else {
            return redirect()->back()->with('message2', 'Unable to Add New Branch');
        }
    }


    public function updateDailyCharges()
    {
        $lastRunDate = Carbon::now()->toDateString();
        
        // Check if the script has already run for the day
        $count = Mortuary::checkIfScriptRanToday($lastRunDate);
        
        if ($count == 0) {
            // The script hasn't run for the day, so run it
            $resultset = Mortuary::fetchTableRecordOnlyDailyInsert('corpsedeposit', 'update_today');
            
            foreach ($resultset as $corpse) {
                $corpseID = $corpse->case_id;
                $storageType = $corpse->storage_type;
                $dailyCharge = ($storageType == 'VIP') ? 500 : 300;
                
                // Update daily charge in mortuary_bill table
                Mortuary::updateDailyCharge($lastRunDate, $dailyCharge, $corpseID);
                Mortuary::updateChargeDate($lastRunDate, $corpseID);
            }

                return response()->json(['message' => 'Daily charges updated successfully.']);

        } else {

                 return response()->json(['message' => 'Daily charges already updated for today.']);

        }
    }

    public function corpse_record()
    {

        $resultset = Mortuary::fetchTableRecordOnly('corpsedeposit', 'datex');

        $resultset->transform(function ($item, $key) {
            $depositDate = new DateTime($item->created_at);
            $currentDate = new DateTime();
            $item->daysDifference = $currentDate->diff($depositDate)->format('%a');
            $item->staff = Mortuary::targetedInfo('staff', 'staff_id', $item->entered_by);
            return $item;
        });

        return view('mortuary.corpse_record', compact('resultset'));

    }


    

    public function view_corpse_details($case_id)
    {
        $corpse = DB::table('corpsedeposit')->where('case_id', $case_id)->first();

        if (!$corpse) {
            return redirect()->back()->with('error', 'Corpse details not found');
        }

        $staff = DB::table('staff')->where('staff_id', $corpse->entered_by)->first();

        return view('mortuary.view_corpse_details', compact('corpse', 'staff'));
    }
    

    public function edit_corpse_details($case_id)
    {
        $corpse = DB::table('corpsedeposit')->where('case_id', $case_id)->first();

        if (!$corpse) {
            return redirect()->back()->with('error', 'Corpse details not found');
        }

        $staff = DB::table('staff')->where('staff_id', $corpse->entered_by)->first();

        return view('mortuary.edit_corpse_details', compact('corpse', 'staff'));
    }

    public function discharge_corpse($case_id)
    {
        $corpse = DB::table('corpsedeposit')->where('case_id', $case_id)->first();
        $staff = DB::table('staff')->where('staff_id', $corpse->entered_by)->first();
        $bill = DB::table('mortuary_bill')->where('corpse_id', $case_id)->first();
        $balance = $bill->total_amount - $bill->amount_paid;

        return view('mortuary.discharge_corpse', compact('corpse', 'staff', 'bill', 'balance'));
    }

    

    public function handleDischargeCorpse(Request $request)
    {
        // Handle the discharge process here
        // For example, update the status in the database
        $case_id = $request->input('case_id');
        $balance = $request->input('balance');
    
        // Update the status of the corpse to 'discharged'
        DB::table('corpsedeposit')
            ->where('case_id', $case_id)
            ->update(['status' => 'discharged']);
    
        // Perform any other necessary actions, e.g., updating the bill status
    
        // Redirect or do something after handling the request
        return redirect()->route('mortuary.discharge_corpse', ['case_id' => $case_id])
                         ->with('success', 'Corpse discharged successfully.');
    }
    
    public function showBills()
    {
        //$bills = MortuaryController::all();
        $bills = DB::table('mortuary_bill')->get();
        return view('mortuary.mortuary_bill', ['bills' => $bills]);
    }





    public function billDetails($bill_id)
{
    $bill = DB::table('mortuary_bill')->where('bill_id', $bill_id)->first();
    return view('mortuary.bill_details', compact('bill'));
}


    public function mortuary_price_list()
    {
          // Fetch the price list from the database
          $resultset = DB::table('price_list')->get();
          return view('mortuary.mortuary_price_list', compact('resultset'));
    }


    // public function editPriceList($id)
    // {
    //     // Fetch the specific price list item and pass to the view if needed
    //     $priceItem = DB::table('price_list')->where('id', $id)->first();
    //     return view('mortuary.edit_price_list', compact('priceItem'));
    // }

    public function editPriceList($id)
    {
        // Fetch the specific price list item and pass to the view if needed
        $priceItem = DB::table('price_list')->where('id', $id)->first();
        return view('mortuary.edit_price_list', compact('priceItem'));
    }

    public function updatePriceList(Request $request)
    {
        // Validate the request data
        $request->validate([
            'price_id' => 'required',
            'price_name' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        // Update the price list item in the database
        DB::table('price_list')
            ->where('id', $request->price_id)
            ->update([
                'price_name' => $request->price_name,
                'amount' => $request->amount,
                'description' => $request->description,
                'freeday' => $request->freeday,
            ]);

        // Redirect back to the price list with a success message
        return redirect()->route('mortuary.mortuary_price_list')->with('success', 'Price list updated successfully.');
    }

    public function add_mortuary_price_list()
    {
        return view('mortuary.add_mortuary_price_list');
    }

    public function ambulance_services()
    {
        return view('mortuary.ambulance_services');
    }

    public function booked_ambulance_service()
    {
        $resultset = DB::table('ambulance_booking')->get();
        return view('mortuary.booked_ambulance_service', compact('resultset'));
        // $booking = DB::table('ambulance_booking')->where('booking_id', $id)->first();
        // return view('mortuary.booked_ambulance_service', compact('booking'));
    }

    public function add_new_material()
    {
        return view('mortuary.add_new_material');
    }

    public function viewMaterials()
    {
        $materials = DB::table('mortuarymaterials')->get();
        return view('mortuary.view_material', compact('materials'));
    }

    public function viewMaterialDetails($id)
    {
        $material = DB::table('mortuarymaterials')->where('MaterialID', $id)->first();
        return view('mortuary.view_material_details', compact('material'));
    }

 

    public function editMaterials()
    {
        $materials = DB::table('mortuarymaterials')->get();
        return view('mortuary.edit_material', compact('materials'));
    }

    public function editMaterialDetails($id)
    {
        $material = DB::table('mortuarymaterials')->where('MaterialID', $id)->first();
        return view('mortuary.edit_material_details', compact('material'));
    }

    public function updateMaterial(Request $request)
    {
        $request->validate([
            'MaterialID' => 'required|string|max:255',
            'MaterialName' => 'required|string|max:255',
            'category' => 'required|string',
            'Quantity' => 'required|numeric',
            'Unit' => 'required|string',
            'description' => 'nullable|string',
        ]);

        DB::table('mortuarymaterials')->where('MaterialID', $request->MaterialID)->update([
            'MaterialName' => $request->MaterialName,
            'category' => $request->category,
            'Quantity' => $request->Quantity,
            'Unit' => $request->Unit,
            'description' => $request->description,
        ]);

        return redirect()->route('mortuary.edit-materials')->with('success', 'Material updated successfully.');
    }

    // public function record_used_material()
    // {
    //     return view('mortuary.record_used_material');
    // }

    public function record_used_material()
    {
    
        $materials = DB::table('mortuarymaterials')->get();
        return view('mortuary.record_used_material', compact('materials'));
    }

    public function fetch_material_details($id)
    {
        $material = DB::table('mortuarymaterials')
                        ->where('id', $id)
                        ->first();
    
        if (!$material) {
            return response()->json(['error' => 'Material not found'], 404);
        }
    
        return response()->json([
            'name' => $material->name,
            'category' => $material->category,
            'unit' => $material->unit,
        ]);
    } 

    public function store_used_material(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'mate_id' => 'required|exists:mortuary_materials,id',
            'quantity' => 'required|numeric',
            'note' => 'nullable|string',
        ]);

        // Process storing of used material
        // Example: Save to database or perform other actions

        return redirect()->back()->with('success', 'Used material recorded successfully!');
    }


    public function viewUsedMaterial()
    {
        $resultset = DB::table('usedmaterials')->get();
        return view('mortuary.view_used_material', ['resultset' => $resultset]);
    }

    

    public function item_request()
    {
        return view('mortuary.item_request');
    } 
    
    public function servicesList()
    {
        $resultset = DB::table('mortuary_service')->get();
        return view('mortuary.mortuary_service', compact('resultset'));
    }

    public function addServiceForm()
    {
        return view('mortuary.add_services');
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'required|string',
        ]);

        DB::table('mortuary_service')->insert([
            'service_name' => $request->service_name,
            'price' => $request->price,
            'details' => $request->details,
        ]);

        return redirect()->route('mortuary.services')->with('success', 'Service added successfully.');
    }

    public function editServiceForm($id)
    {
        $service = DB::table('mortuary_service')->where('id', $id)->first();
        return view('mortuary.edit_service', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'required|string',
        ]);

        DB::table('mortuary_service')->where('id', $id)->update([
            'service_name' => $request->service_name,
            'price' => $request->price,
            'details' => $request->details,
        ]);

        return redirect()->route('mortuary.services')->with('success', 'Service updated successfully.');
    }

    public function deleteService(Request $request, $id)
    {
        DB::table('mortuary_service')->where('id', $id)->delete();
        return redirect()->route('mortuary.services')->with('success', 'Service deleted successfully.');
    }
    
    public function ambulanceServices()
    {
        return view('mortuary.ambulance_services');
    }

    public function addAmbulanceServiceForm()
    {
        return view('mortuary.add_ambulance_service');
    }

    public function storeAmbulanceService(Request $request)
    {
        $request->validate([
            'state' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'sienna_amount' => 'required|numeric',
            'jeep_amount' => 'required|numeric',
        ]);

        DB::table('ambulance_service')->insert([
            'state' => $request->state,
            'place' => $request->place,
            'sienna_amount' => $request->sienna_amount,
            'jeep_amount' => $request->jeep_amount,
        ]);

        return redirect()->route('mortuary.ambulance-services')->with('success', 'Ambulance service added successfully.');
    }

    public function editAmbulanceServiceForm($id)
    {
        $service = DB::table('ambulance_service')->where('id', $id)->first();
        return view('mortuary.edit_ambulance_service', compact('service'));
    }

    public function updateAmbulanceService(Request $request, $id)
    {
        $request->validate([
            'state' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'sienna_amount' => 'required|numeric',
            'jeep_amount' => 'required|numeric',
        ]);

        DB::table('ambulance_service')->where('id', $id)->update([
            'state' => $request->state,
            'place' => $request->place,
            'sienna_amount' => $request->sienna_amount,
            'jeep_amount' => $request->jeep_amount,
        ]);

        return redirect()->route('mortuary.ambulance-services')->with('success', 'Ambulance service updated successfully.');
    }

    public function bookAmbulanceForm($id)
    {
        $service = DB::table('ambulance_service')->where('id', $id)->first();
        return view('mortuary.book_ambulance', compact('service'));
    }

    public function storeAmbulanceBooking(Request $request)
    {
        $request->validate([
            'service_id' => 'required|integer',
            'state' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:255',
            'next_of_kin' => 'required|string|max:255',
        ]);

        DB::table('ambulance_bookings')->insert([
            'service_id' => $request->service_id,
            'state' => $request->state,
            'place' => $request->place,
            'phone' => $request->phone,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'next_of_kin' => $request->next_of_kin,
        ]);

        return redirect()->route('mortuary.ambulance-services')->with('success', 'Ambulance booked successfully.');
    }
    
    public function ambulanceBookings()
    {
        $resultset = DB::table('ambulance_booking')->get();
        return view('mortuary.ambulance_bookings', compact('resultset'));
    }

    public function viewBookedService($id)
    {
        $booking = DB::table('ambulance_booking')->where('booking_id', $id)->first();
        $staff = DB::table('staff')->where('staff_id', $booking->added_by)->first();
        return view('mortuary.view_booked_service', compact('booking', 'staff'));
    }


    public function markCompleteBookedServiceForm($id)
    {
        $booking = DB::table('ambulance_booking')->where('booking_id', $id)->first();
        $staff = DB::table('staff')->where('staff_id', $booking->added_by)->first();
        return view('mortuary.mark_complete_booked_service', compact('booking', 'staff'));
    }

    public function markCompleteBookedService(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|integer',
            'service_id' => 'required|integer',
        ]);

        DB::table('ambulance_booking')->where('booking_id', $request->booking_id)->update([
            'status' => 'Completed',
            'completed_by' => $request->user_login,
            'completed_at' => now(),
        ]);

        return redirect()->route('mortuary.ambulance_bookings')->with('success', 'Ambulance service marked as complete.');
    }
    

    public function addMaterialForm()
    {
        return view('mortuary.add_material');
    }

    public function storeMaterial(Request $request)
    {
        $request->validate([
            'material_name' => 'required|string|max:255',
            'category' => 'required|string',
            'quantity' => 'required|numeric',
            'unit' => 'required|string',
            'description' => 'nullable|string',
        ]);

        DB::table('materials')->insert([
            'material_name' => $request->material_name,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'description' => $request->description,
        ]);

        return redirect()->route('mortuary.add_material')->with('success', 'Material added successfully.');
    }



    public function viewUsedMaterialDetails($id)
    {
        $material = DB::table('usedmaterials')->where('MaterialID', $id)->first();
        return view('mortuary.view_used_material_details', compact('material'));
    }



    public function viewRequestList()
    {
        $resultset = DB::table('requisition')->orderBy('id')->get();
        return view('mortuary.item_request', ['resultset' => $resultset]);
    }

    public function returnRequest($id)
    {
        // Handle the return request logic here
        // For now, just redirect back with a success message
        return redirect()->route('mortuary.view_request_list')->with('success', 'Request returned successfully.');
    }

    public function newRequest(Request $request)
    {
        $request->validate([
            'item' => 'required|array',
            'item.*' => 'required|string',
            'quantity' => 'required|array',
            'quantity.*' => 'required|numeric',
        ]);

        foreach ($request->item as $index => $item) {
            DB::table('requisition')->insert([
                'requisition_date' => now(),
                'item' => $item,
                'quantity' => $request->quantity[$index],
                'qty_disbursed' => 0, // Initial value
                'quantity_bal' => $request->quantity[$index], // Initial value
                'requisition_status' => 'Pending', // Initial value
                'department' => 'Mortuary', // Example department
                'requester' => 'Example Requester', // Example requester
                'branch' => 'Example Branch', // Example branch
            ]);
        }

        return redirect()->route('mortuary.view_request_list')->with('success', 'New request added successfully.');
    }
    

    
}
