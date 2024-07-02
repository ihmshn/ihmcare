@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Patient Category</h6>
            <a href="patient_management" class="ms-text-primary">Back</a>
            <!-- <a href="?action=view_patient_category" class="ms-text-primary">View Patient Category</a> -->
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">
 
                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Patient Category</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="patient_category" placeholder="Enter Patient Category">
                    </div>
                </div>

            </div>
            
            <button class="btn btn-primary mt-4 " name="add_patient_cate" type="submit">Create</button>

        </div>               
      
  </form>

</div>
</div>
</div>

@endsection