
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Branches</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Branches
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_branch"><i class="fas fa-plus"></i>Add New Branch</a>
        </li>
        <li class="menu-item2">
          <a href="edit_branch"><i class="fas fa-edit"></i>Edit Branch</a>
        </li>
        <li class="menu-item2">
         <a href="delete_branch"><i class="fas fa-trash-alt"></i>Delete Branch</a>
        </li>
        <li class="menu-item2">
          <a href="view_branches"><i class="fas fa-eye"></i>View All Branches</a>
        </li>
       
      </ul>
    </div>
  </div>
</div>

@endsection