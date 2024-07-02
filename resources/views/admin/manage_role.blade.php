
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Roles</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      Roles Management Features
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
           <a href="add_user_role"><i class="fas fa-plus"></i>Add New Role</a>
        </li>
        <li class="menu-item2">
          <a href="view_roles"><i class="fas fa-eye"></i>View All Roles</a>
        </li>
        <li class="menu-item2">
          <a href="edit_role"><i class="fas fa-edit"></i>Edit Role</a>
        </li>
        <li class="menu-item2">
          <a href="delete_role"><i class="fas fa-trash-alt"></i>Delete Role</a>
        </li>
        <li class="menu-item2">
         <a href="assign_permissions"><i class="fas fa-user-shield"></i>Assign Permissions</a>
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection