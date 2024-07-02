@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add New Branch</h6>
            <a href="manage_branch" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
        
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Branch Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="branch_name" placeholder="Branch Name">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Branch Prefix</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="branch_prefix" placeholder="Branch Name">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Company</label>
                    <select name="company" class="form-control">
                    <option value="">- Select Company -</option>
                    <option> SPECIALIST HOSPITAL</option>
                    <option>OTHERS</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Address</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Email</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Phone Number</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                    </div>
                </div>

                
                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Contact Person</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="contact_person" placeholder="Contact Person">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control">
                    <option value="">- Select Status -</option>
                    <option>Active</option>
                    <option>Inactive</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                <button class="btn btn-primary mt-4 " name="add_branch" type="submit">Add Branch</button>
                </div>

            </div>
            
        </div>               
     
  </form>

</div>
</div>
@endsection