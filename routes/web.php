<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\frontdesk\FrontdeskController;
use App\Http\Controllers\billing\BillingController;
use App\Http\Controllers\cashier\CashierController;
use App\Http\Controllers\centralstore\CentralstoreController;
use App\Http\Controllers\chronic_disease\ChronicDiseaseController;
use App\Http\Controllers\counseling\CounselingController;
use App\Http\Controllers\dietician\DieticianController;
use App\Http\Controllers\doctor\DoctorController;
use App\Http\Controllers\manager\ManagerController;
use App\Http\Controllers\hmo_officer\HMOController;
use App\Http\Controllers\human_resource\HRController;
use App\Http\Controllers\ict\IctController;
use App\Http\Controllers\internal_audit\InternalauditController;
use App\Http\Controllers\lab\LabController;
use App\Http\Controllers\legal\LegalController;
use App\Http\Controllers\occupational_health\Occupational_healthController;
use App\Http\Controllers\pharmacy\PharmacyController;
use App\Http\Controllers\physiotherapy\PhysiotherapyController;
use App\Http\Controllers\procurement\ProcurementController;
use App\Http\Controllers\quality_assurance\Quality_assuranceController;
use App\Http\Controllers\radiology\RadiologyController;
use App\Http\Controllers\mortuary\MortuaryController;
use App\Http\Controllers\cfo\CFOController;
use App\Http\Controllers\blood_bank\BloodbankController;
use App\Http\Controllers\dailysis_unit\DailysisUnitController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/manage_users', [adminController::class, 'manage_users'])->name('admin.manage_users');
    Route::get('/add_new_user', [adminController::class, 'add_new_user'])->name('admin.add_new_user');
    Route::get('/view_users', [adminController::class, 'viewUsers'])->name('admin.view_users');
    Route::get('/edit_user', [adminController::class, 'edit_user'])->name('admin.edit_user');
    Route::get('/delete_user', [adminController::class, 'delete_user'])->name('admin.delete_user'); 
    Route::get('/reset_user_password', [adminController::class, 'reset_user_password'])->name('admin.reset_user_password');

    Route::get('/manage_role', [adminController::class, 'manage_role'])->name('admin.manage_role');
    Route::get('/add_user_role', [adminController::class, 'add_user_role'])->name('admin.add_user_role');
    Route::get('/view_roles', [adminController::class, 'view_roles'])->name('admin.view_roles');
    Route::get('/edit_role', [adminController::class, 'edit_role'])->name('admin.edit_role');
    Route::get('/delete_role', [adminController::class, 'delete_role'])->name('admin.delete_role');
    Route::get('/assign_permissions', [adminController::class, 'assign_permissions'])->name('admin.assign_permissions');

    Route::get('/manage_branch', [adminController::class, 'manage_branch'])->name('admin.manage_branch');
    Route::get('/add_branch', [adminController::class, 'add_branch'])->name('admin.add_branch');
    Route::get('/edit_branch', [adminController::class, 'edit_branch'])->name('admin.edit_branch');
    Route::get('/delete_branch', [adminController::class, 'delete_branch'])->name('admin.delete_branch');
    Route::get('/view_branches', [adminController::class, 'view_branches'])->name('admin.view_branches');

    Route::get('/manage_departments', [adminController::class, 'manage_departments'])->name('admin.manage_departments');
    Route::get('/create_department_group', [adminController::class, 'create_department_group'])->name('admin.create_department_group');
    Route::get('/create_department', [adminController::class, 'create_department'])->name('admin.create_department');
    Route::get('/create_subunit', [adminController::class, 'create_subunit'])->name('admin.create_subunit');
    Route::get('/view_departments', [adminController::class, 'view_departments'])->name('admin.view_departments');
    Route::get('/view_dept', [adminController::class, 'view_dept'])->name('admin.view_dept');
    Route::get('/view_unit', [adminController::class, 'view_unit'])->name('admin.view_unit');

    Route::get('/manage_theatre', [adminController::class, 'manage_theatre'])->name('admin.manage_theatre');
    Route::get('/add_theatre', [adminController::class, 'add_theatre'])->name('admin.add_theatre');
    Route::get('/view_theatre', [adminController::class, 'view_theatre'])->name('admin.view_theatre');

    Route::get('/expense_management', [adminController::class, 'expense_management'])->name('admin.expense_management');
    Route::get('/add_expense_role', [adminController::class, 'add_expense_role'])->name('admin.add_expense_role');
    Route::get('/expense_request', [adminController::class, 'expense_request'])->name('admin.expense_request');
    Route::get('/expense_review', [adminController::class, 'expense_review'])->name('admin.expense_review');

    Route::get('/manage_insurance', [adminController::class, 'manage_insurance'])->name('admin.manage_insurance');
    Route::get('/setup_corporate_insurance', [adminController::class, 'setup_corporate_insurance'])->name('admin.setup_corporate_insurance');
    Route::get('/view_corporate_insurance', [adminController::class, 'view_corporate_insurance'])->name('admin.view_corporate_insurance');

    Route::get('/manage_service', [adminController::class, 'manage_service'])->name('admin.manage_service');
    Route::get('/create_service_category', [adminController::class, 'create_service_category'])->name('admin.create_service_category');
    Route::get('/add_services', [adminController::class, 'add_services'])->name('admin.add_services');
    Route::get('/view_service_category', [adminController::class, 'view_service_category'])->name('admin.view_service_category');
    Route::get('/view_service', [adminController::class, 'view_service'])->name('admin.view_service');
    
    Route::get('/manage_tariffs', [adminController::class, 'manage_tariffs'])->name('admin.manage_tariffs');
    Route::get('/private_drug_tariff', [adminController::class, 'private_drug_tariff'])->name('admin.private_drug_tariff');

    Route::get('/manage_doctors', [adminController::class, 'manage_doctors'])->name('admin.manage_doctors');
    Route::get('/add_doctor_level', [adminController::class, 'add_doctor_level'])->name('admin.add_doctor_level');
    Route::get('/add_doctor_specialty', [adminController::class, 'add_doctor_specialty'])->name('admin.add_doctor_specialty');
    Route::get('/add_new_doctor', [adminController::class, 'add_new_doctor'])->name('admin.add_new_doctor');
    Route::get('/view_doctors_level', [adminController::class, 'view_doctors_level'])->name('admin.view_doctors_level');
    Route::get('/view_doc_specialty', [adminController::class, 'view_doc_specialty'])->name('admin.view_doc_specialty');
    Route::get('/view_doctors', [adminController::class, 'view_doctors'])->name('admin.view_doctors');

    Route::get('/store_management', [adminController::class, 'store_management'])->name('admin.store_management');
    Route::get('/add_new_store', [adminController::class, 'add_new_store'])->name('admin.add_new_store');
    Route::get('/add_item_group', [adminController::class, 'add_item_group'])->name('admin.add_item_group');
    Route::get('/add_item_subgroup', [adminController::class, 'add_item_subgroup'])->name('admin.add_item_subgroup');
    Route::get('/add_item', [adminController::class, 'add_item'])->name('admin.add_item');
    Route::get('/add_drugs_pharmacy_centralstore', [adminController::class, 'add_drugs_pharmacy_centralstore'])->name('admin.add_drugs_pharmacy_centralstore');
    Route::get('/add_price_central_store_items', [adminController::class, 'add_price_central_store_items'])->name('admin.add_price_central_store_items');
    Route::get('/central_store_update_item_qty', [adminController::class, 'central_store_update_item_qty'])->name('admin.central_store_update_item_qty');
    Route::get('/view_stores', [adminController::class, 'view_stores'])->name('admin.view_stores');
    Route::get('/view_items', [adminController::class, 'view_items'])->name('admin.view_items');

    Route::get('/manage_bed', [adminController::class, 'manage_bed'])->name('admin.manage_bed');
    Route::get('/add_bed', [adminController::class, 'add_bed'])->name('admin.add_bed');
    Route::get('/add_bed_category', [adminController::class, 'add_bed_category'])->name('admin.add_bed_category');
    Route::get('/view_bed', [adminController::class, 'view_bed'])->name('admin.view_bed');
    
    Route::get('/patient_management', [adminController::class, 'patient_management'])->name('admin.patient_management');
    Route::get('/add_patient_category', [adminController::class, 'add_patient_category'])->name('admin.add_patient_category');
    Route::get('/view_patient_category', [adminController::class, 'view_patient_category'])->name('admin.view_patient_category');
    Route::get('/patient_payment_adjustment', [adminController::class, 'patient_payment_adjustment'])->name('admin.patient_payment_adjustment');
    Route::get('/diagnosis_update', [adminController::class, 'diagnosis_update'])->name('admin.diagnosis_update');

    Route::get('/reporting', [adminController::class, 'reporting'])->name('admin.reporting');
    Route::get('/settings', [adminController::class, 'settings'])->name('admin.settings');
    Route::get('/setup_hmo_plan_type', [adminController::class, 'setup_hmo_plan_type'])->name('admin.setup_hmo_plan_type');
    Route::get('/family_setup', [adminController::class, 'family_setup'])->name('admin.family_setup');
    Route::get('/create_family_type', [adminController::class, 'create_family_type'])->name('admin.create_family_type');
    Route::get('/add_registration_type', [adminController::class, 'add_registration_type'])->name('admin.add_registration_type');
    Route::get('/add_visit_type', [adminController::class, 'add_visit_type'])->name('admin.add_visit_type');
    Route::get('/add_revisit_consultaion_type', [adminController::class, 'add_revisit_consultaion_type'])->name('admin.add_revisit_consultaion_type');
    Route::get('/corporate_insurance_specialty', [adminController::class, 'corporate_insurance_specialty'])->name('admin.corporate_insurance_specialty');
    Route::get('/private_specialty', [adminController::class, 'private_specialty'])->name('admin.private_specialty');
    Route::get('/registration_tariff', [adminController::class, 'registration_tariff'])->name('admin.registration_tariff');
    Route::get('/edit_hmo_consulation_tariff', [adminController::class, 'edit_hmo_consulation_tariff'])->name('admin.edit_hmo_consulation_tariff');
    Route::get('/list_specialty', [adminController::class, 'list_specialty'])->name('admin.list_specialty');
    Route::get('/create_chart_of_account', [adminController::class, 'create_chart_of_account'])->name('admin.create_chart_of_account');
    Route::get('/create_static_account', [adminController::class, 'create_static_account'])->name('admin.create_static_account');
    
    
    
    
    
});




Route::prefix('frontdesk')->group(function () {

    Route::get('/dashboard', [FrontdeskController::class, 'dashboard'])->name('frontdesk.dashboard');
    Route::get('/new_patient_reg', [FrontdeskController::class, 'new_patient_reg'])->name('frontdesk.new_patient_reg');
    

});


Route::prefix('billing')->group(function () {

    Route::get('/dashboard', [BillingController::class, 'dashboard'])->name('billing.dashboard');
    // Route::get('/new_patient_reg', [BillingController::class, 'new_patient_reg'])->name('billing.new_patient_reg');
    

});



Route::prefix('cashier')->group(function () {

    Route::get('/dashboard', [CashierController::class, 'dashboard'])->name('cashier.dashboard');
    // Route::get('/new_patient_reg', [BillingController::class, 'new_patient_reg'])->name('billing.new_patient_reg');
    

});


Route::prefix('centralstore')->group(function () {

    Route::get('/dashboard', [CentralstoreController::class, 'dashboard'])->name('centralstore.dashboard');
    // Route::get('/new_patient_reg', [BillingController::class, 'new_patient_reg'])->name('billing.new_patient_reg');
    

});


Route::prefix('chronic_disease')->group(function () {

    Route::get('/dashboard', [ChronicDiseaseController::class, 'dashboard'])->name('chronic_disease.dashboard');
    

});


Route::prefix('counseling')->group(function () {

    Route::get('/dashboard', [CounselingController::class, 'dashboard'])->name('counseling.dashboard');
    

});


Route::prefix('dietician')->group(function () {

    Route::get('/dashboard', [DieticianController::class, 'dashboard'])->name('dietician.dashboard');
    

});


Route::prefix('doctor')->group(function () {

    Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    

});


Route::prefix('manager')->group(function () {

    Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard');
    

});


Route::prefix('hmo_officer')->group(function () {

    Route::get('/dashboard', [HMOController::class, 'dashboard'])->name('hmo_officer.dashboard');
    

});



Route::prefix('human_resource')->group(function () {

    Route::get('/dashboard', [HRController::class, 'dashboard'])->name('human_resource.dashboard');
    

});


Route::prefix('ict')->group(function () {

    Route::get('/dashboard', [IctController::class, 'dashboard'])->name('ict.dashboard');
    

});


Route::prefix('internal_audit')->group(function () {

    Route::get('/dashboard', [InternalauditController::class, 'dashboard'])->name('internal_audit.dashboard');
    

});

Route::prefix('lab')->group(function () {

    Route::get('/dashboard', [LabController::class, 'dashboard'])->name('lab.dashboard');
    

});


Route::prefix('legal')->group(function () {

    Route::get('/dashboard', [LegalController::class, 'dashboard'])->name('legal.dashboard');
    

});


Route::prefix('occupational_health')->group(function () {

    Route::get('/dashboard', [Occupational_healthController::class, 'dashboard'])->name('occupational_health.dashboard');
    

});


Route::prefix('pharmacy')->group(function () {

    Route::get('/dashboard', [PharmacyController::class, 'dashboard'])->name('pharmacy.dashboard');
    

});



Route::prefix('physiotherapy')->group(function () {

    Route::get('/dashboard', [PhysiotherapyController::class, 'dashboard'])->name('physiotherapy.dashboard');
    

});



Route::prefix('procurement')->group(function () {

    Route::get('/dashboard', [ProcurementController::class, 'dashboard'])->name('procurement.dashboard');
    

});


Route::prefix('quality_assurance')->group(function () {

    Route::get('/dashboard', [Quality_assuranceController::class, 'dashboard'])->name('quality_assurance.dashboard');
    

});


Route::prefix('radiology')->group(function () {

    Route::get('/dashboard', [RadiologyController::class, 'dashboard'])->name('radiology.dashboard');
    

});


Route::prefix('mortuary')->group(function () {

    Route::get('/dashboard', [MortuaryController::class, 'dashboard'])->name('mortuary.dashboard');
    Route::get('/corpse_deposit', [MortuaryController::class, 'corpse_deposit'])->name('mortuary.corpse_deposit');
    Route::post('/corpse_deposit', [MortuaryController::class, 'corpse_depositInsert']);
    Route::get('/corpse_record', [MortuaryController::class, 'corpse_record'])->name('mortuary.corpse_record');
   
    Route::get('/view_corpse_details/{case_id}', [MortuaryController::class, 'view_corpse_details'])->name('mortuary.view_corpse_details');
    Route::get('/edit_corpse_details/{case_id}', [MortuaryController::class, 'edit_corpse_details'])->name('mortuary.edit_corpse_details');

    Route::get('/discharge_corpse/{case_id}', [MortuaryController::class, 'discharge_corpse'])->name('mortuary.discharge_corpse');
    Route::post('/discharge_corpse', [MortuaryController::class, 'handleDischargeCorpse'])->name('mortuary.handle_discharge_corpse');

    // Route::get('/mortuary_bill', [MortuaryController::class, 'mortuary_bill'])->name('mortuary.mortuary_bill');
    Route::get('/mortuary_bill', [MortuaryController::class, 'showBills'])->name('mortuary.mortuary_bill');
Route::get('/bill_details/{bill_id}', [MortuaryController::class, 'billDetails'])->name('mortuary.bill_details');
Route::get('/mortuary_price_list/', [MortuaryController::class, 'mortuary_price_list'])->name('mortuary.mortuary_price_list');
Route::get('/bill_details/{id}', [MortuaryController::class, 'billDetails'])->name('mortuary.bill_details');

});


Route::prefix('cfo')->group(function () {

    Route::get('/dashboard', [CFOController::class, 'dashboard'])->name('cfo.dashboard');
    

});


Route::prefix('blood_bank')->group(function () {

    Route::get('/dashboard', [BloodbankController::class, 'dashboard'])->name('blood_bank.dashboard');
    

});


Route::prefix('dailysis_unit')->group(function () {

    Route::get('/dashboard', [DailysisUnitController::class, 'dashboard'])->name('dailysis_unit.dashboard');
    

});

