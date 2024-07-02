@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Speciality Private</h6>
            <a href="settings" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">

            <div class="form-row">


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Specialty</label>
                    <select name="specialty" class="form-control" required>
                    <option value=""> Select Specialty </option>
                        <?php //$Fcall->selectDepartment('tbl_department');?>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Consultation Amount Revisit</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="number_of_patient_allowed" placeholder="Revisit Consultation Amount">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Department</label>
                    <select name="department" class="form-control" required>
                    <option value=""> Select Department </option>
                        <?php //$Fcall->selectDepartment('tbl_department');?>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">IP Consultation Amount First Visit</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="number_of_patient_allowed" placeholder="IP First Visit Consultation Amount">
                    </div>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Designation</label>
                    <select name="department" class="form-control" required >
                    <option value=""> Select Designation </option>
                        <?php //$Fcall->selectDepartment('tbl_department');?>
                    </select>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">IP Consultation Amount Revisit</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="number_of_patient_allowed" placeholder="IP Revisit Consultation Amount">
                    </div>
                </div>



                


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Consultation Amount First Visit</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="agreed_amount" placeholder="First Visit Consultaion amount">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Consultation Period</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="number_of_patient_allowed" placeholder="Consultation Period">
                    </div>
                </div>


                <div class="col-md-12 mb-3">
                <label for="validationCustom002">Branch</label>
                <select name="branch" class="form-control">
                <option value="">Select Branch</option>
                    <?php //$data = $Fcall->selectBranch('tbl_branch');?>
                </select>
                </div>



                <div class="col-md-12 mb-3">
                    <button class="btn btn-primary mt-4 float-right" name="add_family_type" type="submit">Create</button>
                </div>


            </div>
            
        </div>               
   
    </form>

</div>
</div>

@endsection