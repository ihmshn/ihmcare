@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp

<div class="col-xl-12 col-md-12">
      <div class="ms-panel-header ms-panel-custome">
         <h6>View Patient Category</h6>
         <a href="patient_management" class="ms-text-primary">Back</a>
      </div>
      <div class="ms-panel-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                  <thead>
                     <tr>
                        <th scope="col">SN</th>
                        
                        <th scope="col">Material Name</th>
                        <th scope="col">Edit</th> 
                        <th scope="col">Remove</th> 
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                    //  $no_id = 1;
                    //  $resultset = $Fcall->fetch_table_only('tbl_patient_category');
                    //  if (!empty($resultset)) {
                    //  foreach ($resultset as $k => $v) {
                  ?>
                  <tr>
                  <td scope="row"><?php ////echo $no_id++ ?></td>
                 
                  <td><?php //echo $resultset[$k]['CategoryName']; ?></td>

                  <td>
                    
                    <button type="button" data-toggle="modal" data-target="#editList" class="btn btn-primary ml-auto" style="margin-top:-3px;" onclick="mesansgetCate(<?php //echo $resultset[$k]['id'];?>);">
                      <i class="fas fa-redo "></i>
                          Edit        
                    </button>

                 </td>


                  <td>
                     <form method="post" enctype="multipart/form-data"> 
                      <button type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" style="margin-top:-3px;" onclick="javascript:confirmationDelete($(this));return false;" id="<?php //echo $resultset[$k]["id"]; ?>" value="<?php //echo $resultset[$k]["id"]; ?>"><i class="fas fa-trash"></i> Delete
                      </button>
                      </form> 
                  </td>

                  </tr>
                        <?php
                    //       }
                    //   }
                  ?>
                  </tbody>
            </table>
         </div>
      </div>
  </div>


  <form method="post" enctype="multipart/form-data"> 
             <div class=" modal fade" id="editList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit List</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body">

                         <div class="row">

                     
                             <div class="col-sm-12">
                                 <label>Edit Patient Category </label>
                                 <input type="text" id="CategoryName" name="CategoryName" class="form-control" style="height:50px !important;">
                                 <input type="hidden" id="id" name="id" class="form-control" style="height:50px !important;">
                                 <br />
                             </div>


                          </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="update_pCate">Update Category</button>
                            
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
               </div>
            </div>
      </form>


@endsection