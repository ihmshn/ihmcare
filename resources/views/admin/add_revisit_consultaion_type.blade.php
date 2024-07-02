@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Revisit Consultation Type</h6>
            <a href="settings" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
            <div class="form-row">

                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Consultation Type</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="consultation_type" placeholder="Enter Consultation Type">
                    </div>
                </div>

                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Remark</label>
                    <div class="input-group">
                    <textarea name="remark" class="form-control" rows="2"></textarea>
                    </div>
                </div>

            </div>
            <button class="btn btn-primary mt-4 " name="add_const_type" type="submit">Create</button>
        </div>               
   
    </form>

</div>
</div>
</div>



 

@endsection