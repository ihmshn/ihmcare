@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Add New Bed </h6>
            <a href="manage_bed" class="ms-text-primary">Back</a>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body">
         
            <div class="form-row">

                <div class="col-md-12 mb-4">
                    <label for="validationCustom002">Select Bed Category</label>
                    <select name="bed_category" class="form-control" id="category" onchange="fetchProductdd();">
                    <option value=""> Select </option>
                        <?php //$Fcall->selectBedCategory('bedcategory');?>
                    </select>
                </div>



                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Select Ward</label>
                    <select name="ward" class="form-control">
                    <option value=""> Select </option>
                        <?php //$Fcall->selectWards('wards');?>
                    </select>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Bed Name</label>
                    <div class="input-group">
                            <input type="text" class="form-control" name="bed_name">
                    </div>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Bed Amount</label>
                    <div class="input-group">
                            <input type="text" readonly class="form-control" name="bed_amount" id="amount">
                    </div>
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom002">Bed Number</label>
                    <div class="input-group">
                            <input type="text" class="form-control" name="bed_number">
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

                        <button class="btn btn-primary mt-4 float-right" name="add_bed" type="submit">Add</button>

                    </div>

            </div>
            

        </div>            
        
        

    
            
  </form>

</div>
</div>
</div>


@endsection


<script>
    function fetchProductdd() {

if (window.XMLHttpRequest) {
   // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

var AcountID =document.getElementById('category').value;
var JsExplode = AcountID;
var url = "admin_control/ajaxController.php?categoryid="+JsExplode;

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('amount').value = this.responseText;

// var result = this.responseText.split("*");
// document.getElementById('name').value = result[0];
// document.getElementById('category').value = result[1];
// document.getElementById('color').value = result[4];
// document.getElementById('p_code').value = result[5]; 
// document.getElementById('instock').value = result[2];
// document.getElementById('price').value = result[3];
// document.getElementById('image').src = "view/product_image/" + result[4];   
    }
};
xmlhttp.open("GET",url,true);
xmlhttp.send();

CalculateTotalSale();
}

 </script>