@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Create HMO Plan-Type</h6>
            <a href="settings" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
               
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">HMO</label>
                    <div class="input-group">
                    <select name="hmo" class="form-control">
                        <option value="">Select HMO</option>
                        <option>NHIS</option>
                        <option>SUNU HEALTH NIGERIA LIMITED</option>
                    </select>
                    </div>
                </div>

                

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Plan Type</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="plan_type" placeholder="Enter Plan Type">
                    </div>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Plan Type Note</label>
                    <div class="input-group">
                    <textarea type="text" class="form-control" rows="3" placeholder="Enter Plan-Type Note" name="plan_type_note"></textarea>
                    </div>
                </div>

                
                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control">
                        <option value="">Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <button class="btn btn-primary mt-5 float-right" name="add_hmo" type="submit">Create</button>
                </div>

            </div>
            
        </div>               
  </form>

</div>
</div>
</div>

@endsection