@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Expense Management</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Expense
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_expense_role"><i class="fas fa-plus"></i>Add Expense Role</a>
        </li>


        <li class="menu-item2">
           <a href="expense_request"><i class="fas fa-plus"></i>Expense Request</a>
        </li>


        <li class="menu-item2">
           <a href="expense_review"><i class="fas fa-plus"></i>Expense Review</a>
        </li>

       

       <!--  <li class="menu-item">
          <a href="view_theatre"><i class="fas fa-eye"></i>View Theatre</a>
        </li> -->
       
      </ul>
    </div>
  </div>
</div>

@endsection