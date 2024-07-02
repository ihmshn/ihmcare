@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Sub-Unit </h6>
            <a href="manage_departments" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Department </label>
                    <select name="department" class="form-control" required>
                    <option value=""> Select Department  </option>
                        <?php //$data = $Fcall->selectDepartment2('departmentgroup');?>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom002">Unit Name</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="unit_name" placeholder="Unit Name">
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                <button class="btn btn-primary mt-4 float-right" name="add_subunit" type="submit">Create Sub-unit</button>

                </div>

            </div>
            
        </div>              

  </form>

</div>
</div>
</div>

@endsection