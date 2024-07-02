@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Department </h6>
            <a href="manage_departments" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body ">
         
       
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Department Group Type</label>
                    <select name="department_group_type" class="form-control" required>
                    <option value="">- Select Group Type -</option>
                    <?php //$data = $Fcall->selectDepartmentTYPE2('departmentgrouptype');?>
                    </select>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Department Group </label>
                    <input type="text" class="form-control" name="department_group" placeholder="Enter Group Name">
                    </div>
                </div>



                <!-- <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Unit Name </label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="unit_name" placeholder="Enter Group Name">
                    </div>
                </div> 


            </div>-->
            
            <button class="btn btn-primary btn-block"  name="add_department" type="submit">Create Department</button>

        </div>               

    
            
  </form>

</div>
</div>
</div>



 

@endsection