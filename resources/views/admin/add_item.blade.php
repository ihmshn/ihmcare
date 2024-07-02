@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add Item To Store</h6>
            <a href="store_management" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
       
            <div class="form-row">

                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Item Group</label>
                    <select name="item_group" class="form-control" required>
                    <option value=""> Select </option>
                        <?php //$Fcall->selectItemGroup('item_group');?>
                    </select>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Item SubGroup</label>
                    <select name="item_subgroup" class="form-control" required>
                    <option value=""> Select </option>
                        <?php //$Fcall->selectItemSubGroup('itemsubgroup');?>
                    </select>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Item Name</label>
                    <div class="input-group">
                            <input type="text" class="form-control" name="item_name">
                    </div>
                </div>


                <div class="col-md-3 mb-4">
                        <label for="validationCustom002">Category</label>
                    <select name="category" class="form-control" required>
                        <option value="">Select</option>
                        <option>PROCEDURE</option>
                        <option>SERVICES</option>  
                        <option>DRUGS</option>  
                        <option>ITEMS</option>  
                        <option>VACCINES</option>  
                        <option>INVESTIGATION</option>
                        <option>REGISTRATION</option>
                        <option>CONSULTATION</option>
                        <option>PROFESSIONAL FEES</option>
                        <option>ACCOMMODATION</option>
                        <option>RDI ITEMS</option>
                        <option>LAB ITEMS</option>    
                        <option>ICT ITEMS</option>
                        <option>FACILITY ITEMS</option>
                        <option>OTHER ITEMS</option>
                        <option>CLINICAL ITEMS</option>
                        <option>MEDICAL FITNESS</option>
                        <option>CORPORATE PAYMENT</option>
                        <option>RETAINER-SHIP</option>
                        <option>GAS</option>
                        <option>BLOOD</option>
                        <option>EQUIPMENT</option>
                        <option>BALDININI 100</option>
                        <option>OXYGEN CONSUMPTION</option>
                        <option>A-SCAN</option>
                        <option>SCOLIOSIS BRACE</option>'
                        <option>PRP 1</option>
                        <option>PSYCHOTHERAPY HOME VISIT</option>
                        <option>PTERYGIUM EXCISION ONE EYE</option>
                        <option>BALDININI GOLD</option>
                        <option>NIKOE SILVER</option>
                        <option>ROUTIUE TREATMENT</option>
                    </select>
                </div>


                <div class="col-md-3 mb-3">
                        <label for="validationCustom002">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">- Select Status -</option>
                        <option>Active</option>
                        <option>Inactive</option>  
                    </select>
                </div>

                <div class="col-md-12 mb-3">

                    <button class="btn btn-primary mt-4 float-right" name="add_item" type="submit">Create</button>

                </div>

            </div>
        
        </div>            
           
  </form>

</div>
</div>
</div>


@endsection