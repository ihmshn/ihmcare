@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add New Store</h6>
            <a href="store_management" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Store Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="store_name" placeholder="">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                        <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">- Select Status -</option>
                        <option>Active</option>
                        <option>Inactive</option>  
                    </select>
                </div>

                <div class="col-md-12 mb-3">

                    <button class="btn btn-primary mt-4 float-right" name="add_store" type="submit">Create</button>

                </div>

            </div>
            

        </div>               

    
            
  </form>

</div>
</div>
</div>



 

@endsection