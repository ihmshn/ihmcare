@extends('layouts.cfo')
@section('content')



<div class="col-xl-12 col-md-12 hideprint">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <p>Dashborad</p>
                            </div>
                            <div class="ms-panel-body">
                                
                    <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                <h6 style="font-size: 12px;">Revenue</h6>
                                <p class="ms-card-change">89</p>
                                <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-layers"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Expenses </h6>
                                    <p class="ms-card-change"> 2</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-list"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Payroll</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-list"></i>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Requests</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-list"></i>
                        </div>
                    </div>





                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                <h6 style="font-size: 12px;">Awaiting Authorization</h6>
                                <p class="ms-card-change">89</p>
                                <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-layers"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Total Ledger</h6>
                                    <p class="ms-card-change"> 2</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-list"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-primary ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Posted Depreciation</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-list"></i>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Cash Balance</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-list"></i>
                        </div>
                    </div>
                   



                    


                </div>

                            </div>
                        </div>
                    </div>

                    

       <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <p>Recent Activities:</p>
                </div>
                <div class="ms-panel-body">
                                
                <div class="row">

                  <div class="table-responsive">
                           <table class="table table-striped thead-secondary" id="example">
                              <thead>
                                 <tr>
                                     <th scope="col">SN</th>
                                    <th scope="col">Admission Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Received BY</th>
                                    <th scope="col">Action</th>
                                 </tr>
                              </thead>
                              <tbody>



                            <?php
                            // $no_id = 1;
                            // $resultset = $Fcall->fetch_table_record_only('corpsedeposit','datex');
                            // if (!empty($resultset)) {
                            // foreach ($resultset as $k => $v) {
                            // $GetData=$Fcall->Targeted_info('staff','staff_id',$resultset[$k]['entered_by']);
                            ?>

                           <tr>
                            <td scope="row"><?php //echo $no_id++ ?></td>
                            <td><?php //echo $resultset[$k]['datex']; ?></td>
                            <td><?php //echo $resultset[$k]['timex']; ?></td>
                            <td><?php //echo $resultset[$k]['name_of_corpse']; ?></td>
                            <td><?php //echo $resultset[$k]['sex']; ?></td>
                            
                            <td>
                                 <?php  
                                //  if($resultset[$k]['status'] == "ongoing"){
                                //    echo '<div  class="badge badge-success badge-shadow p-2">'.$resultset[$k]['status'].'</div>';
                                //  }else{
                                //    echo '<div class="badge badge-danger badge-shadow p-2">'.$resultset[$k]['status'].'</div>';
                                 //}
                                 ?>
                            </td>
                            <td><?php //if( @$GetData['staff_name'] === "null" || @$GetData['staff_name'] ===''){echo " ";}else{echo @$GetData['staff_name'];}
                             ?></td>
                              <td>  
                                <!-- <a href="?action=view_corpse_details&&details=<?php //echo $resultset[$k]['case_id']; ?>"><i class='fa fa-eye ms-text-primary'></i></a>
                            </td> -->
                          </tr>

                          <?php
                            //      }
                            //   }
                            ?>
                                 
                            
                              </tbody>
                           </table>
<!--                            <button type="button" >
                            Print Form
                         </button> -->
                        </div>


       </div>
                </div>
            </div>
        </div>


<!-- <style>
   
    @media print {
        /* Show all elements for printing */
        .hideprint {
            display: none !important;
        }
    }
</style> -->


@endsection