@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Services</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Services
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="create_service_category"><i class="fas fa-plus"></i>Create Services Category</a>
        </li>

        <li class="menu-item2">
           <a href="add_services"><i class="fas fa-plus"></i>Add Services</a>
        </li>

        <li class="menu-item2">
          <a href="view_service_category"><i class="fas fa-eye"></i>View Services Category</a>
        </li>
       
        <li class="menu-item2">
          <a href="view_service"><i class="fas fa-eye"></i>View Services</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>

@endsection