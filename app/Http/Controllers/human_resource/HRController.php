<?php

namespace App\Http\Controllers\human_resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\human_resource\HR;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class HRController extends Controller
{
    public function dashboard()
    {
        return view('human_resource.dashboard');
    }


    public function addstaff()
    {
        // Fetch data for the dropdowns
        $titles = DB::table('stafftitle')->get();
        $roles = DB::table('roles')->get();
        $designations = DB::table('staffdesignation')->get();
        $departmentTypes = DB::table('departmentgrouptype')->get();
        $departments = DB::table('departmentgroup')->get();
        $units = DB::table('unitname')->get();
        $gradeLevels = DB::table('staff_grade_levels')->get();
        $staffCategories = DB::table('staffcategory')->get();

        // Check if the staff table is empty and generate the staff ID
        $isStaffTableEmpty = DB::table('staff')->doesntExist();
        $invoiceId = $isStaffTableEmpty ? 'staff-10000' : $this->generateStaffId();

        return view('human_resource.addstaff', compact(
            'titles', 'roles', 'designations', 'departmentTypes', 'departments', 'units',
            'gradeLevels', 'staffCategories', 'invoiceId'
        ));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'date_of_birth' => 'required|date',
            'marital_status' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'employment_date' => 'required|date',
            'role' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department_type' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'unitname' => 'required|string|max:255',
            'blood_group' => 'required|string|max:3',
            'current_address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'grade_level' => 'required|string|max:255',
            'next_of_kin' => 'required|string|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20',
            'emergency_contact_relationship' => 'required|string|max:255',
            'staff_category' => 'required|string|max:255',
            'staff_id' => 'required|string|max:255|unique:staff,staff_id',
        ]);

        DB::table('staff')->insert($validatedData);

        return redirect()->route('staff.index')->with('success', 'Staff registered successfully.');
    }

    private function generateStaffId()
    {
        $lastRecord = DB::table('staff')->latest('staff_id')->first();
        $lastInvoiceId = $lastRecord->staff_id;
        $invoiceIdParts = explode('-', $lastInvoiceId);
        return $invoiceIdParts[0] . '-' . ($invoiceIdParts[1] + 1);
    }

    public function index()
    {
        $staffList = DB::table('staff')->get();
        return view('staff.index', compact('staffList'));
    }

    public function Staffphotocapture()
    {
        return view('human_resource.Staffphotocapture');
    }

    public function Staffqualification()
    {
        return view('human_resource.Staffqualification');
    }


    public function Staffdependant()
    {
        return view('human_resource.Staffdependant');
    }

    public function staffpromotion()
    {
        return view('human_resource.staffpromotion');
    }

    public function Uploadstaffdocument()
    {
        return view('human_resource.Uploadstaffdocument');
    }

    public function Addstaffreferees()
    {
        return view('human_resource.Addstaffreferees');
    }


    public function staffnorminalroll()
    {
        return view('human_resource.staffnorminalroll');
    }

    public function Recruitment()
    {
        return view('human_resource.Recruitment');
    }

    public function Sessionplaning()
    {
        return view('human_resource.Sessionplaning');
    }

    public function Payroll()
    {
        return view('human_resource.Payroll');
    }

    public function Staffleave()
    {
        return view('human_resource.Staffleave');
    }

    public function Addleave_entitle()
    {
        return view('human_resource.Addleave_entitle');
    }

    public function personal_requst()
    {
        return view('human_resource.personal_requst');
    }

    public function Employeeviewing()
    {
        return view('human_resource.Employeeviewing');
    }

    public function staffconfirmation()
    {
        return view('human_resource.staffconfirmation');
    }

    public function addtitle()
    {
        return view('human_resource.addtitle');
    }

    public function Employmentconfirm()
    {
        return view('human_resource.Employmentconfirm');
    }

    public function Unconfirmedstaff()
    {
        return view('human_resource.Unconfirmedstaff');
    }

    public function Viewstaffdepartment()
    {
        return view('human_resource.Viewstaffdepartment');
    }

    public function Learningneedsaccessment()
    {
        return view('human_resource.Learningneedsaccessment');
    }


    public function Viewstaffbydateofbirth()
    {
        return view('human_resource.Viewstaffbydateofbirth');
    }

    public function AddStaffCategory()
    {
        return view('human_resource.AddStaffCategory');
    }

    public function Viewstaffbydateofemploy()
    {
        return view('human_resource.Viewstaffbydateofemploy');
    }

    
    public function StaffDesignation()
    {
        return view('human_resource.StaffDesignation');
    }


    public function StaffGradeLevel()
    {
        return view('human_resource.StaffGradeLevel');
    }

    public function Staff_finacial()
    {
        return view('human_resource.Staff_finacial');
    } 
    
    public function Staffsuspension()
    {
        return view('human_resource.Staffsuspension');
    } 

    public function AddGroup()
    {
        return view('human_resource.AddGroup');
    } 

    public function Addleavetype()
    {
        return view('human_resource.Addleavetype');
    } 

    public function Addholiday()
    {
        return view('human_resource.Addholiday');
    } 

    public function publicholiday()
    {
        return view('human_resource.publicholiday');
    } 

    












}
