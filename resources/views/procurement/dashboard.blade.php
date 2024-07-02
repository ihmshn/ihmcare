@extends('layouts.procurement')
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
                                    <h6 style="font-size: 12px;">New CS Request</h6>
                                    <p class="ms-card-change"> 898</p>
                                    <p class="fs-12 mt-3 text-center bg-success p-2"><a href="" class="text-white">View list <i class="fas  fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Pending Request</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12 mt-3 text-center bg-danger p-2"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Vendor List</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12 mt-3 text-center bg-info p-2"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Expired Items</h6>
                                    <p class="ms-card-change"> 2</p>
                                    <p class="fs-12 mt-3 text-center bg-warning p-2"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="fa fa-times-circle"></i>
                        </div>
                    </div>



                </div>

                            </div>
                        </div>
                    </div>

                    

       <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <p>Daily</p>
                </div>
                <div class="ms-panel-body">
                                
                <div class="row">

                  <div class="table-responsive">
                           <table class="table table-striped thead-info" id="example">
                              <thead>
                                 <tr>
                                     <th scope="col">SN</th>
                                    <th scope="col"> Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Requester BY</th>
                                    <th scope="col">Action</th>
                                 </tr>
                              </thead>
                              <tbody>

                                <tr>
                                        <td>1</td>
                                        <td>2023-10-30</td>
                                        <td>11:42:08am</td>
                                        <td>Stam Pad</td>
                                        <td>10</td>
                                        <td>Central Store</td>
                                        <td>Requester</td>
                                        <td><a style="margin-top: -10px;" href="" class="btn btn-warning">Raise Up</a></td>
                                </tr>
                              </tbody>
                           </table>

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