@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Doctor's Specialty</h6>
            <a href="manage_doctors" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
            <div class="form-row">

                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Doctor Specialty</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="doctor_specialty" placeholder="Enter Specialty">
                    </div>
                </div>


                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Remark (Optional)</label>
                    <div class="input-group">
                    <textarea name="remark" class="form-control" rows="2" placeholder="Enter Remark"></textarea>
                    </div>
                </div>

                <div class="col-md-8 mb-3">

                    <button class="btn btn-primary mt-4 float-right" name="add_doc_specialty" type="submit">Add Doctor's Specialty</button>

                </div>

            </div>
            

        </div>               

    
            
  </form>

</div>
</div>
</div>



@endsection