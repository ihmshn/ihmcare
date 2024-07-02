@extends('layouts.billing')
@section('content')

<div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <p>Billing Module </p>
                            </div>
                            <div class="ms-panel-body">
                                
                         <div class="row">
                              <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Daily Corporate Bills</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Daily HMO Bills</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Current IP</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Daily Finalized Bills</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 11px;">Total Estimated Private Bill</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">ivf Bill Payments</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Retail Payment</h6>
                                    <p class="ms-card-change"> 0</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Bundle Bill Payment</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>



                </div>

                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header ">
                                <h6 class="">Private Pay Later List </h6>
                            </div>
                            <div class="ms-panel-body">
                                <div class="table-responsive ">
                                   <table class="table table-bordered">
                                      <thead>
                                         <tr>
                                            <th scope="col">SN</th>
                                            <th scope="col"> Date</th>
                                            <th scope="col">Patient Name</th>
                                          
                                            <th scope="col">Details</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Reasons</th>
                                            <th scope="col">Authorized By</th>
                                            <th scope="col">Cashier Name</th>
                                         </tr>
                                      </thead>
                              <!-- <tbody>
                                 <tr>
                                    <th scope="row">1</th>
                                    <td>Chihoo Hwang</td>
                                    <td>Wordpress Template</td>
                                    <td>67384917</td>
                                 </tr>
                                 <tr>
                                    <th scope="row">2</th>
                                    <td>Ajay Suryavanash</td>
                                    <td>Business Card</td>
                                    <td>789393819</td>
                                 </tr>
                                 <tr>
                                    <th scope="row">3</th>
                                    <td>John Doe</td>
                                    <td>App Customization</td>
                                    <td>137893137</td>
                                 </tr>
                                 <tr>
                                    <th scope="row">4</th>
                                    <td>Alesdro Guitto</td>
                                    <td>Dashboard Design</td>
                                    <td>235193138</td>
                                 </tr>
                                 <tr>
                                    <th scope="row">5</th>
                                    <td>Manbir Sahwny</td>
                                    <td>Theme Development</td>
                                    <td>19938917</td>
                                 </tr>
                              </tbody> -->
                           </table>
                        </div>
                            </div>
                        </div>
                    </div>

@endsection