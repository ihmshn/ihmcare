@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Store Management </h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Stores
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_new_store"><i class="fas fa-plus"></i>Add New  Store</a>
        </li>

        <li class="menu-item2">
           <a href="add_item_group"><i class="fas fa-plus"></i>Add Item Group</a>
        </li>


        <li class="menu-item2">
           <a href="add_item_subgroup"><i class="fas fa-plus"></i>Add Item Sub-Group</a>
        </li>

        <li class="menu-item2">
          <a href="add_item"><i class="fas fa-eye"></i>Add Item</a>
        </li>

        <li class="menu-item2">
          <a href="add_drugs_pharmacy_centralstore"><i class="fas fa-eye"></i>Add Drugs To Pharmacy / Central Store</a>
        </li>

        <li class="menu-item2">
          <a href="add_price_central_store_items"><i class="fas fa-eye"></i>Add Price (Central Store Items)</a>
        </li>

        <li class="menu-item2">
          <a href="central_store_update_item_qty"><i class="fas fa-eye"></i>Central Store (Update Item Quantity)</a>
        </li>
 
        <li class="menu-item2">
          <a href="view_stores"><i class="fas fa-eye"></i>View All Stores</a>
        </li>

        <li class="menu-item2">
          <a href="view_items"><i class="fas fa-eye"></i>View All Items</a>
        </li> 
       
      </ul>
    </div>
  </div>
</div>



@endsection