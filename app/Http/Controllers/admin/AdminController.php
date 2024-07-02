<?php

namespace App\Http\Controllers\Admin;


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller; // Import the base Controller class
use Illuminate\Http\Request;
use App\Models\admin\Admin;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manage_users()
    {
        return view('admin.manage_users');
    }

    public function add_new_user()
    {
        return view('admin.add_new_user');
    }

    public function viewUsers()
    {
        $users = Admin::fetchTableOnly('security_access');
        return view('admin.view_users', ['users' => $users]);
    }

    public function edit_user()
    {
        return view('admin.edit_user');
    }

    public function delete_user()
    {
        return view('admin.delete_user');
    }

    public function reset_user_password()
    {
        return view('admin.reset_user_password');
    }

    public function manage_role()
    {
        return view('admin.manage_role');
    }

    public function add_user_role()
    {
        return view('admin.add_user_role');
    }

    public function view_roles()
    {
        return view('admin.view_roles');
    }

    public function edit_role()
    {
        return view('admin.edit_role');
    }

    public function delete_role()
    {
        return view('admin.delete_role');
    }

    public function assign_permissions()
    {
        return view('admin.assign_permissions');
    }

    public function manage_branch()
    {
        return view('admin.manage_branch');
    }
    
    public function add_branch()
    {
        return view('admin.add_branch');
    }

    public function edit_branch()
    {
        return view('admin.edit_branch');
    }

    public function delete_branch()
    {
        return view('admin.delete_branch');
    }

    public function view_branches()
    {
        return view('admin.view_branches');
    }

    public function manage_departments()
    {
        return view('admin.manage_departments');
    }

    public function create_department_group()
    {
        return view('admin.create_department_group');
    }

    public function create_department()
    {
        return view('admin.create_department');
    }

    public function create_subunit()
    {
        return view('admin.create_subunit');
    }

    public function view_departments()
    {
        return view('admin.view_departments');
    }

    public function view_dept()
    {
        return view('admin.view_dept');
    }

    public function view_unit()
    {
        return view('admin.view_unit');
    }

    public function manage_theatre()
    {
        return view('admin.manage_theatre');
    }

    public function add_theatre()
    {
        return view('admin.add_theatre');
    }

    public function view_theatre()
    {
        return view('admin.view_theatre');
    }

    public function expense_management()
    {
        return view('admin.expense_management');
    }

    public function add_expense_role()
    {
        return view('admin.add_expense_role');
    }

    public function expense_request()
    {
        return view('admin.expense_request');
    }

    public function expense_review()
    {
        return view('admin.expense_review');
    }

    public function manage_insurance()
    {
        return view('admin.manage_insurance');
    }

    public function setup_corporate_insurance()
    {
        return view('admin.setup_corporate_insurance');
    }

    public function view_corporate_insurance()
    {
        return view('admin.view_corporate_insurance');
    }

    public function manage_service()
    {
        return view('admin.manage_service');
    }

    public function create_service_category()
    {
        return view('admin.create_service_category');
    }

    public function add_services()
    {
        return view('admin.add_services');
    }

    public function view_service_category()
    {
        return view('admin.view_service_category');
    }

    public function view_service()
    {
        return view('admin.view_service');
    }
    
    public function manage_tariffs()
    {
        return view('admin.manage_tariffs');
    }

    public function private_drug_tariff()
    {
        return view('admin.private_drug_tariff');
    }

    public function manage_doctors()
    {
        return view('admin.manage_doctors');
    }

    public function add_doctor_level()
    {
        return view('admin.add_doctor_level');
    }

    public function add_doctor_specialty()
    {
        return view('admin.add_doctor_specialty');
    }

    public function add_new_doctor()
    {
        return view('admin.add_new_doctor');
    }

    public function view_doctors_level()
    {
        return view('admin.view_doctors_level');
    }

    public function view_doc_specialty()
    {
        return view('admin.view_doc_specialty');
    }
    
    public function view_doctors()
    {
        return view('admin.view_doctors');
    }
    
    public function store_management()
    {
        return view('admin.store_management');
    }

    public function add_new_store()
    {
        return view('admin.add_new_store');
    }

    public function add_item_subgroup()
    {
        return view('admin.add_item_subgroup');
    }

    public function add_item()
    {
        return view('admin.add_item');
    }

     public function add_drugs_pharmacy_centralstore()
    {
        return view('admin.add_drugs_pharmacy_centralstore');
    }

    public function add_price_central_store_items()
    {
        return view('admin.add_price_central_store_items');
    }

    public function central_store_update_item_qty()
    {
        return view('admin.central_store_update_item_qty');
    }
    
    public function view_stores()
    {
        return view('admin.view_stores');
    }

    public function view_items()
    {
        return view('admin.view_items');
    }

    public function manage_bed()
    {
        return view('admin.manage_bed');
    }

    public function add_bed()
    {
        return view('admin.add_bed');
    }

    public function add_bed_category()
    {
        return view('admin.add_bed_category');
    }
    
    public function view_bed()
    {
        return view('admin.view_bed');
    }

    public function patient_management()
    {
        return view('admin.patient_management');
    }

    public function add_patient_category()
    {
        return view('admin.add_patient_category');
    }

    public function view_patient_category()
    {
        return view('admin.view_patient_category');
    }
    
    public function patient_payment_adjustment()
    {
        return view('admin.patient_payment_adjustment');
    }

    public function diagnosis_update()
    {
        return view('admin.diagnosis_update');
    }
    
    public function reporting()
    {
        return view('admin.reporting');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function setup_hmo_plan_type()
    {
        return view('admin.setup_hmo_plan_type');
    }

    public function family_setup()
    {
        return view('admin.family_setup');
    }
    
    public function create_family_type()
    {
        return view('admin.create_family_type');
    }

    public function add_registration_type()
    {
        return view('admin.add_registration_type');
    }

    public function add_visit_type()
    {
        return view('admin.add_visit_type');
    }

    public function add_revisit_consultaion_type()
    {
        return view('admin.add_revisit_consultaion_type');
    }

    public function corporate_insurance_specialty()
    {
        return view('admin.corporate_insurance_specialty');
    }

    public function private_specialty()
    {
        return view('admin.private_specialty');
    }

    public function registration_tariff()
    {
        return view('admin.registration_tariff');
    }
    
    public function edit_hmo_consulation_tariff()
    {
        return view('admin.edit_hmo_consulation_tariff');
    }

    public function list_specialty()
    {
        return view('admin.list_specialty');
    }

    public function create_chart_of_account()
    {
        return view('admin.create_chart_of_account');
    }

    public function create_static_account()
    {
        return view('admin.create_static_account');
    }
    
    
    

}
