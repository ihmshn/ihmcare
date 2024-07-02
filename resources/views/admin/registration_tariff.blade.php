@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Registration Tariff</h6>
            <a href="settings" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">

            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Category</label>
                    <select name="patient_category" class="form-control" required>
                        <option value="">Select Patient Category</option>
                        <?php //$Fcall->selectPatientCategory('tbl_patient_category');?>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Corporate / Insurance Name</label>
                    <select name="corporate_insurnace" class="form-control" required>
                    <option value=""> Select Corporate / Insurance Name </option>
                        <?php //$Fcall->selectCorporate_Insurance('tbl_corporate_insurance');?>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Amount</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Registration Type</label>
                    <select name="registration_type" class="form-control" required>
                    <option value="">Select Registration Type</option>
                    <?php //$Fcall->selectRegistrationType('tbl_registration_type');?>
                    </select>
                </div>

                        <div class="col-md-12 mb-3">
                            <button class="btn btn-primary mt-4 float-right" name="add_registration_tariff" type="submit">Create</button>
                        </div>

            </div>
            
        </div>               
   
    </form>

</div>
</div>

@endsection