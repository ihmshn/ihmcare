@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp



<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Theatre </h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Theatre
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_theatre"><i class="fas fa-plus"></i>Add Theatre</a>
        </li>

       

        <li class="menu-item2">
          <a href="view_theatre"><i class="fas fa-eye"></i>View Theatre</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>

@endsection