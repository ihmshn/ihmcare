@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Services </h6>
            <a href="manage_service" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Service Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="service_name" placeholder="Enter Service Name">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Service Category</label>
                    <select name="service_category" class="form-control" >
                    <option value=""> Select Service Category</option>
                        <?php //$Fcall->selectServiceCategory('tbl_service_category');?> 
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Department</label>
                    <select name="department" class="form-control">
                    <option value=""> Select Department </option>
                         <?php //$data = $Fcall->selectDepartment('departmentgroup');?>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Sub-Unit</label>
                    <select name="sub_unit" class="form-control" >
                    <option value=""> Select Unit </option>
                        <?php //$data = $Fcall->selectDepartmentuUNIT('unitname');?>
                    </select>
                </div>

                
                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control">
                        <option value="">Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Specialty</label>
                    <select name="specialty" class="form-control">
                        <option value="">Select Specialty</option>
                        <?php //$data = $Fcall->selectSpecialty('tbl_doctors_specialty');?>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                <button class="btn btn-primary mt-4 float-right" name="add_service" type="submit">Create</button>

                </div>


            </div>
            
            

        </div>               

    
            
  </form>

</div>
</div>
</div>

@endsection