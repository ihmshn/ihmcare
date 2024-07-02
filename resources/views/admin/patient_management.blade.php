@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp



<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Patient Management </h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Patient
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_patient_category"><i class="fas fa-plus"></i>Add Patient Category</a>
        </li>

        <li class="menu-item2">
           <a href="view_patient_category"><i class="fas fa-plus"></i>View Patient Category</a>
        </li>

        <li class="menu-item2">
           <a href="patient_payment_adjustment"><i class="fas fa-plus"></i>Patient Payment Adjustment</a>
        </li>


        <li class="menu-item2">
           <a href="diagnosis_update"><i class="fas fa-edit"></i>Diagnosis Update</a>
        </li>

        <!-- <li class="menu-item2">
          <a href="view_bed"><i class="fas fa-eye"></i>View Bed</a>
        </li>  -->
       
      </ul>
    </div>
  </div>
</div>
 

@endsection