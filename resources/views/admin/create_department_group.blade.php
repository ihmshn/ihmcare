@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Department Group Name</h6>
            <a href="manage_departments" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-12 mb-3">
                    <label for="validationCustom002">Department Type Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="group_type" placeholder="Enter  Name">
                    </div>
                </div>

            </div>
            
            <button class="btn btn-primary mt-4 " name="add_group" type="submit">Create Department Type</button>

        </div>               

    
            
  </form>

</div>
</div>
</div>


@endsection