@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Doctors</h6>
            <a href="manage_doctors" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">

            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Doctor Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="doctors_name" placeholder="Enter Doctor's Name">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Email</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                </div> 

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Department</label>
                    <select name="department" class="form-control" required>
                    <option value=""> Select Department </option>
                        <?php //$data = $Fcall->selectDepartment('departmentgroup');?>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Phone Number</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Specialty</label>
                    <select name="specialty" class="form-control" required>
                    <option value=""> Select Specialty </option>
                        <?php //$Fcall->selectSpecialty('tbl_doctors_specialty');?>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control">
                    <option value="">Select</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                    <option value=""> Select </option>
                        <?php //$Fcall->selectLevel('tbl_doctor_level');?>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">In House</label>
                    <select name="inhouse" class="form-control">
                    <option value="">Select</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label>Qualification</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="qualification" placeholder="Enter Qualification">
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <button class="btn btn-primary mt-4 float-right" name="add_doc" type="submit">Add Doctor</button>
                </div>

            </div>
            
        </div>               
   
    </form>

</div>
</div>
</div>


@endsection