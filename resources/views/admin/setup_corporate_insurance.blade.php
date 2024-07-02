@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Corporate / Insurance Setup </h6>
           <a href="manage_insurance" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Corporate / Insurance Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="corporate_insurance_name">
                    </div>
                </div>
  


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Address</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="address">
                    </div>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Phone</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="phone">
                    </div>
                </div>




                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Email</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="email">
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Contact Person</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="contact_person">
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Corporate Type</label>
                    <select name="type" class="form-control">
                        <option value="">Select Type</option>
                        <option>Corporate</option>
                        <option>HMO</option>
                    </select>
                </div>

                
                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control">
                        <option value="">Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

              

                <div class="col-md-12 mb-3">
                <button class="btn btn-primary mt-5 float-right" name="add_cor_hmo" type="submit">Create</button>

                </div>


            </div>
            
            

        </div>               

    
            
  </form>

</div>
</div>

@endsection