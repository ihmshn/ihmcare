@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp



<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Tariffs</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Tariffs
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="private_drug_tariff"><i class="fas fa-eye"></i>Private Drug Tariff</a>
        </li>

        <li class="menu-item2">
           <a href="corporate_drug_tariff"><i class="fas fa-eye"></i>Corporate Drug Tariff</a>
        </li>

        <li class="menu-item2">
          <a href="insurance_drug_tariff"><i class="fas fa-eye"></i>Insurance Drug Tariff</a>
        </li>
       
        <li class="menu-item2">
          <a href="edit_insurance_drug_tariff"><i class="fas fa-edit"></i>Edit Insurance Drug Tariff</a>
        </li>

        <li class="menu-item2">
          <a href="update_corporate_drug_tariff"><i class="fas fa-edit"></i>Update Corporate Drug Tariff</a>
        </li>

        <li class="menu-item2">
           <a href="private_tariff_services"><i class="fas fa-eye"></i>Private Tariff (Services)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_branch_private_tariff_services"><i class="fas fa-plus"></i>Generate Branch Private Tariff (Services)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_branch_pharmacy_store"><i class="fas fa-plus"></i>Generate Branch Pharmacy Store</a>
        </li>

        <li class="menu-item2">
           <a href="corporate_tariff_services"><i class="fas fa-eye"></i>Corporate Tariff (Services)</a>
        </li>

        <li class="menu-item2">
           <a href="insurance_tariff_services"><i class="fas fa-eye"></i>Insurance Tariff (Services)</a>
        </li>

        <li class="menu-item2">
           <a href="uploadd_private_tariff"><i class="fas fa-edit"></i>Upload Private Tariff</a>
        </li>

        <li class="menu-item2">
           <a href="generate_private_tariff_drug"><i class="fas fa-plus"></i>Generate Private Tariff (Drug)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_corporate_tariff_drug"><i class="fas fa-plus"></i>Generate Corporate Tariff (Drug)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_insurance_tariff_drug"><i class="fas fa-plus"></i>Generate Insurance Tariff (Drug)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_insurance_tariff_drug_fromptariff"><i class="fas fa-plus"></i>Generate Insurance / Corporate From Private Tariff (Drug)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_corporate_tariff_services"><i class="fas fa-plus"></i>Generate  Corporate Tariff (Services)</a>
        </li>

        <li class="menu-item2">
           <a href="generate_insurance_tariff_services"><i class="fas fa-plus"></i>Generate Insurance Tariff (Services)</a>
        </li>

        <li class="menu-item2">
           <a href="edit_insurance_tariff_services"><i class="fas fa-edit"></i>Edit Insurance Services Tariff</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>


@endsection