@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Insurance</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Insurance Setup
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="setup_corporate_insurance"><i class="fas fa-plus"></i>Setup Corporate / Insurance</a>
        </li>

        <li class="menu-item2">
          <a href="view_corporate_insurance"><i class="fas fa-eye"></i>View Corporate / Insurance</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>

 

@endsection