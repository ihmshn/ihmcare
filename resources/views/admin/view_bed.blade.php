@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>VIEW Beds  </h6>
         <a href="manage_bed" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
         <table id="example" class="table table-striped thead-primary w-100">
    <thead>
        <tr>
        <th>SN</th>
        <th>BED_ID</th>
        <th>BED_NAME</th>
        <th>CATEGORY</th>
        <th>WARD</th>
        <th>BED_NUMBER</th>
        <th>AMOUNT</th>
        <th>STATUS</th>
        <th>EDIT</th>
        <th>REMOVE</th>
        </tr>
    </thead>

    <tbody>
            <?php
        //  $no_id = 1;
        //  $url = $_SERVER['REQUEST_URI'];
        //  $date_year = explode('&&', $url);
        //  //// echo $date_year[1];
        //  $resultset = $Fcall->fetch_table_only('bed');
        //     if (!empty($resultset)) {

        //        foreach ($resultset as $k => $v) { 
                
                ?>
               <tr>
               <td scope="row"><?php //echo $no_id++ ?></td>
               <td><?php// echo $resultset[$k]['BedID']; ?></td>
               <td><?php// echo $resultset[$k]['BedName']; ?></td>
               <td><?php// echo $resultset[$k]['Category']; ?></td>
               <td><?php// echo $resultset[$k]['Ward']; ?></td>
               <td><?php// echo $resultset[$k]['BedNumber']; ?></td>
               <td><?php// echo number_format($resultset[$k]['BedAmount']); ?></td>

               <td>
                  <b>
                     <?php

                    //  if($resultset[$k]['Status'] == "Active"){

                    //     // echo '<span class="badge badge-success p-2">'.$resultset[$k]['Status'].'</span>';

                    //  }else{

                    //    // echo '<span class="badge badge-warning p-2">'.$resultset[$k]['Status'].'</span>';

                    //  }

                  ?>
                  </b>
               </td>
               
               <td>
                  <button style="width: 50px !important; margin-top: -5px;" type="button" class="btn btn-secondary text-white w-100" data-toggle="modal" data-target="#mymodaledit" onclick="mesansgetCate(<?php// echo $resultset[$k]['id'];?>);"><i class="fas fa-edit ms-text-white"></i></button>
               </td>
               <td>
                <form method="post">
               <button style="width: 50px !important; margin-top: -5px;" type="submit" name="del" class="btn btn-danger btn-sm text-white" onclick="javascript:confirmationDelete($(this));return false;" id="<?php// echo $resultset[$k]["id"]; ?>" value="<?php// echo $resultset[$k]["id"]; ?>"><i class="fas fa-trash"></i> 
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
              <h4 class="modal-title text-white">Edit Branch</h4>
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



                        <div class="row"> 

                           <div class="col-md-6"> 
                      <div class="form-group">
                        <label for="categoryName">Category</label>
                        <input type="text"  class="form-control" id="Category" name="Category">
                      </div>
                       </div>


                        <div class="col-md-6"> 

                     <div class="form-group">
                        <label for="categoryName">Ward</label>
                        <input type="text" class="form-control" name="Ward" id="Ward">
                      </div>
                      
                     </div>


                     <div class="col-md-6"> 
                      <div class="form-group">
                        <label for="categoryName">Bed Name</label>
                        <input type="text"  class="form-control" id="BedName" name="BedName">
                      </div>
                       </div>


                        <div class="col-md-6"> 

                     <div class="form-group">
                        <label for="categoryName">Bed Number</label>
                        <input type="text" class="form-control" name="BedNumber" id="BedNumber">
                      </div>
                      
                     </div>



                     <div class="col-md-6"> 
                      <div class="form-group">
                        <label for="categoryName">Bed Amount</label>
                        <input type="text"  class="form-control" id="BedAmount" name="BedAmount">
                      </div>
                       </div>


                        <div class="col-md-6"> 

                     <div class="form-group">
                        <label for="categoryName">BedID</label>
                        <input type="text" readonly class="form-control" name="BedID" id="BedID">
                      </div>
                      
                     </div>

                     <div class="col-md-6"> 

                     <div class="form-group">
                        <label for="categoryName">Status</label>
                        <select class="form-control" name="status" id="status-select">
                             <!-- <option value="">Select Status</option> -->
                             <option value="Inactive">Inactive</option>
                             <option value="Active">Active</option>
                        </select> 
                     </div>

                  </div>

                     </div>
                      

                      <div class="col-md-12 mb-3">
                 
                      <button class="btn btn-light mt-4 d-inline w-20 float-right " type="button" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary mt-4 d-inline w-20 float-right mr-3" name="editBed" type="submit">Update</button>&nbsp;
                       
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