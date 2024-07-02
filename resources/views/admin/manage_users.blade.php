
@extends('layouts.admin')
@section('content')




<div class="container">
  <div class="header ">
    <h1 class="text-white " style="margin-top: -15px;">Manage Users</h1>
    <span>&nbsp;</span>
  </div>

  <div class="card">
    <div class="card-header">
      User Management Features
    </div>
    <div class="card-body">
      <ul>
        <li class="menu-item2">
          <a href="add_new_user"><i class="fas fa-user-plus"></i>Add New User</a>
        </li>
        <li class="menu-item2">
          <a href="view_users"><i class="fas fa-users"></i>View All Users</a>
        </li>
        <li class="menu-item2">
          <a href="edit_user"><i class="fas fa-user-edit"></i>Edit User</a>
        </li>
        <li class="menu-item2">
          <a href="delete_user"><i class="fas fa-user-times"></i>Delete User</a>
        </li>
        <li class="menu-item2">
          <a href="reset_user_password"><i class="fas fa-key"></i>Reset User Password</a>
        </li>
        <!-- <li class="menu-item2">
          <a href="assign_roles"><i class="fas fa-user-tag"></i>Assign Roles</a>
        </li> -->
      </ul>
    </div>
  </div>
</div>
@endsection