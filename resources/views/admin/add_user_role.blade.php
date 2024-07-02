@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add User Role</h6>
            <a href="manage_role" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">User Role Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="user_role_name" placeholder="Role Name">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control" required>
                    <option value="">- Select Status -</option>
                    <option>Active</option>
                    <option>Inactive</option>
                   
                </select>
                </div>


            </div>
            
            <button class="btn btn-primary mt-4 " name="add_user_role" type="submit">Create</button>

        </div>               

    
            
  </form>

</div>
</div>
@endsection
