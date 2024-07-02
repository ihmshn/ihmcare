@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Settings </h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Setting
    </div>
    <div class="card-body">
      <ul>

        <li class="menu-item2">
           <a href="setup_hmo_plan_type"><i class="fas fa-plus"></i>Setup HMO Plan-Type</a>
        </li>

        <li class="menu-item2">
           <a href="family_setup"><i class="fas fa-plus"></i>Family Setup</a>
        </li>

        <li class="menu-item2">
          <a href="create_family_type"><i class="fas fa-plus"></i>Create Family Type</a>
        </li> 

        <li class="menu-item2">
          <a href="add_registration_type"><i class="fas fa-plus"></i>Add Registration Type</a>
        </li>


        <li class="menu-item2">
          <a href="add_visit_type"><i class="fas fa-plus"></i>Add Visit Type</a>
        </li>


        <li class="menu-item2">
          <a href="add_revisit_consultaion_type"><i class="fas fa-plus"></i>Add Revisit Consultation Type</a>
        </li>


        <li class="menu-item2">
          <a href="corporate_insurance_specialty"><i class="fas fa-plus"></i>Corporate / Insurance</a>
        </li>


        <li class="menu-item2">
          <a href="private_specialty"><i class="fas fa-plus"></i>Private</a>
        </li>


        <li class="menu-item2">
          <a href="registration_tariff"><i class="fas fa-plus"></i>Registration Tariff</a>
        </li>


        <li class="menu-item2">
          <a href="edit_hmo_consulation_tariff"><i class="fas fa-plus"></i>Edit Hmo Consultation Tariff</a>
        </li>


        <li class="menu-item2">
          <a href="list_specialty"><i class="fas fa-plus"></i>List Specialty</a>
        </li>


        <li class="menu-item2">
          <a href="edit_specialty"><i class="fas fa-plus"></i>Edit Specialty</a>
        </li>


        <li class="menu-item2">
          <a href="item_requisition"><i class="fas fa-plus"></i>Item Requisition</a>
        </li>


        <li class="menu-item2">
          <a href="leave_request"><i class="fas fa-plus"></i>Leave Request</a>
        </li>


        <li class="menu-item2">
          <a href="create_chart_of_account"><i class="fas fa-plus"></i>Create Chart of Account</a>
        </li>


        <li class="menu-item2">
          <a href="create_static_account"><i class="fas fa-plus"></i>Create Static Account</a>
        </li>


        <li class="menu-item2">
          <a href="leave_dashboard"><i class="fas fa-plus"></i>Leave Dashboard</a>
        </li>


        <li class="menu-item2">
          <a href="confirmation_appraisal"><i class="fas fa-plus"></i>Confirmation Appraisal</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>


@endsection