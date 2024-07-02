@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>VIEW CORPORATE / INSURANCE  </h6>
          
          <a href="manage_insurance" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">

	<thead>
		<tr>
			<th>SN</th>
         <th>COMPANY_NAME</th>
         <th>PHONE</th>
         <th>EMAIL</th>
         <th>TYPE</th>
         <th>STATUS</th>
		 <!-- <th>EDIT</th> -->
         <th>REMOVE</th>
		</tr>
	</thead>

	<tbody>
			<?php
        //  $no_id = 1;
        //  $url = $_SERVER['REQUEST_URI'];
        //  $date_year = explode('&&', $url);
        //  // echo $date_year[1];
        //  $resultset = $Fcall->fetch_table_only('corporate_insurance');
        //     if (!empty($resultset)) {
        //        foreach ($resultset as $k => $v) { 
                  ?>
                       <tr>
                       <td scope="row"><?php //echo $no_id++ ?></td>
                       <td><?php //echo $resultset[$k]['CompanyName']; ?></td>
                       <td><?php //echo $resultset[$k]['phone']; ?></td>
                       <td><?php //echo $resultset[$k]['ContactEmail']; ?></td>
                       <td><?php //echo $resultset[$k]['CorporateType']; ?></td>
                       <td><b>

                        <?php

                        //    if($resultset[$k]['Status'] == "Active"){

                        //        echo '<span class="badge badge-success p-2">'.$resultset[$k]['Status'].'</span>';

                        //    }else{

                        //       echo '<span class="badge badge-warning p-2">'.$resultset[$k]['Status'].'</span>';

                        //    }

                        ?>
                        </b></td>
                       <!-- <td>
                        <button style="width: 50px !important; margin-top: -5px;" type="button" class="btn btn-secondary text-white w-100" data-toggle="modal" data-target="#mymodaledit" onclick="mesansgetCate(<?php //echo $resultset[$k]['id'];?>);"><i class="fas fa-edit ms-text-white"></i></button>
                       </td> -->
                       <td>
                        <form method="post">
                       <button style="width: 50px !important; margin-top: -5px;" type="submit" name="del" class="btn btn-danger btn-sm text-white" onclick="javascript:confirmationDelete($(this));return false;" id="<?php //echo $resultset[$k]["id"]; ?>" value="<?php //echo $resultset[$k]["id"]; ?>"><i class="fas fa-trash"></i> 
                       </button>
                       </form>
                      </td>
                       
                      
                       </tr>
               <?php
                //     }
                // }
            ?>
	</tbody>
</table>
</div>
</div>
</div>





<div class="modal fade" id="mymodaledit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">Edit   Corporate / Insurance</h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
  
            <div class="modal-body p-0 text-left">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-bshadow-none">
                  <div class="ms-panel-header">
                    <h6>Edit</h6>
                  </div>
                  <div class="ms-panel-body">
                   <form method="post">

                      
                      <div class="form-group">
                        <label for="categoryName">Company Name</label>
                        <input type="text"  class="form-control" id="CompanyName" name="CompanyName">
                      </div>
                      

                     <div class="form-group">
                        <label for="categoryName">Address</label>
                        <input type="text" class="form-control" name="Address" id="address">
                      </div>
                      
                    

                     <div class="form-group">
                        <label for="categoryName"> Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                      </div>
                      
                    
                      <div class="form-group">
                        <label for="categoryName">Contact Person</label>
                        <input type="text"  class="form-control" id="ContactPerson" name="ContactPerson">
                      </div>
                       
                      <div class="form-group">
                        <label for="categoryName">Contact Email</label>
                        <input type="text"  class="form-control" id="ContactEmail" name="ContactEmail">
                      </div>
                       

                     <div class="form-group">
                        <label for="categoryName">Phone</label>
                        <input type="text" class="form-control" name="Phone" id="Phone">
                      </div>
                      
                    
                       <div class="form-group">
                        <label for="categoryName">Contact Person</label>
                        <input type="text" class="form-control" name="ContactPerson" id="ContactPerson">
                      </div>
                      
                     

                     <div class="form-group">
                        <label for="CorporateType">Corporate Type</label>
                        <select class="form-control" name="CorporateType" id="CorporateType">
                             <option value="">Select Type</option>
                             <option>Corporate</option>
                             <option>HMO</option>
                        </select>
                      </div>
                      <input type="hidden" id="id" name="id">
                    


                 <!--     <div class="col-md-4"> 

                     <div class="form-group">
                        <label for="categoryName">Status</label>
                        <select class="form-control" name="status" id="status-select">
                             <option value="">Select Status</option>
                             <option value="Inactive">Inactive</option>
                             <option value="Active">Active</option>
                        </select> 
                     </div>

                  </div> -->

                     </div>

                     
                    <div class="col-md-12 mb-3">
                          <button class="btn btn-light mt-4 d-inline w-20 float-right " type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-primary mt-4 d-inline w-20 float-right mr-3" name="editTheatre" type="submit">Update</button>&nbsp;   
                    </div>
                    
                    </form>
                  </div>

           </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection



<script type="text/javascript">
   function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}


function mesansgetCate(categoryId) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var url = "admin_control/ajaxController.php?getinsurcorp=" + categoryId;

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText.split("*");
            
            document.getElementById('CompanyName').value = result[0];
            document.getElementById('address').value = result[1];
            document.getElementById('phone').value = result[2];
            document.getElementById('ContactPerson').value = result[3];
            document.getElementById('ContactEmail').value = result[4];
            document.getElementById('CorporateType').value = result[5];

             var corporateType = result[5];
            var corporateTypeSelect = document.getElementById('CorporateType');
            for (var i = 0; i < corporateTypeSelect.options.length; i++) {
                if (corporateTypeSelect.options[i].value === corporateType) {
                    corporateTypeSelect.selectedIndex = i;
                    break;
                }
            }

            document.getElementById('InsuranceID').value = result[6];
            document.getElementById('id').value = result[7];
            document.getElementById('status-select').value = result[8];

            // Update CorporateType select element
           

            // Update status-select element
            // var status = result[8];
            // var statusSelect = document.getElementById('status-select');
            // for (var j = 0; j < statusSelect.options.length; j++) {
            //     if (statusSelect.options[j].value === status) {
            //         statusSelect.selectedIndex = j;
            //         break;
            //     }
            // }
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

  </script>