@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Doctors</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Doctors
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_doctor_level"><i class="fas fa-plus"></i>Add Doctor Level</a>
        </li>

        <li class="menu-item2">
           <a href="add_doctor_specialty"><i class="fas fa-plus"></i>Add Specialty</a>
        </li>


        <li class="menu-item2">
           <a href="add_new_doctor"><i class="fas fa-plus"></i>Add New Doctor</a>
        </li>

        <li class="menu-item2">
          <a href="view_doctors_level"><i class="fas fa-eye"></i>View View Levels</a>
        </li>
       
        <li class="menu-item2">
          <a href="view_doc_specialty"><i class="fas fa-eye"></i>View Specialties</a>
        </li>


        <li class="menu-item2">
          <a href="view_doctors"><i class="fas fa-eye"></i>View Doctors</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>


@endsection