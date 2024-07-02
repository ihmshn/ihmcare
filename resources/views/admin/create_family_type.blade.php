@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Create Family Type</h6>
            <a href="settings" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Family Type</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="family_type" placeholder="Enter Family Visit Type">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Number of Patient Allowed</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="number_of_patient_allowed" placeholder="Number of Patient Allowed">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Agreed Amount</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="agreed_amount" placeholder="Enter Agreed Amount">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Comment</label>
                    <div class="input-group">
                    <textarea name="comment" class="form-control" rows="2"></textarea>
                    </div>
                </div>

               

            </div>
            <button class="btn btn-primary mt-4 " name="add_family_type" type="submit">Create</button>
        </div>               
   
    </form>

</div>
</div>

@endsection