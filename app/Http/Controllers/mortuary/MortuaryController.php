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
        // $bill = MortuaryBill::find($bill_id);
        $bill =  DB::table('mortuary_bill')->get();
        return view('mortuary.bill_details', compact('bill'));
    }

    public function mortuary_price_list()
    {
        return view('mortuary.mortuary_price_list');
    }


    
}
