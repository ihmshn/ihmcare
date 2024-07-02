@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp



<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Bed Management </h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Bed
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_bed"><i class="fas fa-plus"></i>Add Bed</a>
        </li>

        <li class="menu-item2">
           <a href="add_bed_category"><i class="fas fa-plus"></i>Add Bed Category</a>
        </li>

        <li class="menu-item2">
          <a href="view_bed"><i class="fas fa-eye"></i>View Bed</a>
        </li> 
       
      </ul>
    </div>
  </div>
</div>

@endsection