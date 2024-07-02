@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Service Category</h6>
            <a href="manage_service" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Category Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="category_name" placeholder="Enter Patient Category">
                    </div>
                </div>

                <div class="col-md-8 mb-3">
                    <label for="validationCustom002">Comment (Optional)</label>
                    <div class="input-group">
                   
                    <textarea name="comment" class="form-control" rows="2"></textarea>
                </div>
                </div>

                <div class="col-md-8 mb-3">

                    <button class="btn btn-primary mt-4 float-right" name="add_service_cate" type="submit">Create</button>

                </div>

            </div>
            
            

        </div>               

    
            
  </form>

</div>
</div>
</div>


@endsection