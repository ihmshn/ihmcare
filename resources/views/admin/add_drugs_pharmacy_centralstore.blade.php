@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Item To Pharmacy </h6>
            <a href="store_management" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-12 mb-4">
                    <label for="validationCustom002">Drug Name</label>
                    <select name="drug_name" class="form-control">
                    <option value=""> Select </option>
                        <?php //$Fcall->selectDrugName('item');?>
                    </select>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Unit Cost</label>
                    <div class="input-group">
                            <input type="text" class="form-control" name="unit_cost" placeholder="Enter Uint Cost" required>
                    </div>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Unit Sales</label>
                    <div class="input-group">
                            <input type="text" class="form-control" name="unit_sales" placeholder="Enter Agreed Amount" required>
                    </div>
                </div>


                


                <div class="col-md-12 mb-3">
                        <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control">
                        <option value="">- Select Status -</option>
                        <option>Active</option>
                        <option>Inactive</option>  
                    </select>
                </div>

                <div class="col-md-12 mb-3">

                    <button class="btn btn-primary mt-4 float-right" name="add_item_pharmacy" type="submit">Create</button>

                </div>

            </div>
            

        </div>            
        
        

    
            
  </form>

</div>
</div>
</div>




@endsection