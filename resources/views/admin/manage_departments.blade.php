@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Departments</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Departments
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="create_department_group"><i class="fas fa-plus"></i>Create Department Type</a>
        </li>

        <li class="menu-item2">
           <a href="create_department"><i class="fas fa-plus"></i>Create Department </a>
        </li>

        <li class="menu-item2">
           <a href="create_subunit"><i class="fas fa-plus"></i>Create SubUnit</a>
        </li>

        <li class="menu-item2">
          <a href="view_departments"><i class="fas fa-eye"></i>View  Departments Type</a>
        </li>


        <li class="menu-item2">
          <a href="view_dept"><i class="fas fa-eye"></i>View All Departments</a>
        </li>


        <li class="menu-item2">
          <a href="view_unit"><i class="fas fa-eye"></i>View All SubUnits</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>

@endsection