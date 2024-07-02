@extends('layouts.doctor')
@section('content')

<div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <p>Daily Activity Summary </p>
                            </div>
                            <div class="ms-panel-body">
                                
                         <div class="row">
                              <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget ">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 11px;">My Department Partial Consult</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12 mt-4 text-center bg-danger p-2"><a href="" class="text-white">View list <i class="fas   fa-arrow-circle-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget p-2">
                            <div class="ms-card-body media ">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Daily Discharged Consult </h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget p-2">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Daily IP List</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget p-2">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Daily Staff Family Patient</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"></p>
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
                                        <div class="ms-panel-header bg-success">
                                            <h6 class="text-white">My Department Partial Consultation List 
                                                <!-- <span class="float-right" style="margin-top: -10px !important;"><div class="input-group">
                        <input type="text" class="form-control" name="serach"  style=" width: 300px !important;" placeholder="Search by Patient Name"> 
                        <div class="input-group-append">
                          <span class="input-group-text eye-icon" id="showConfirmPassword">
                            <i class="fa fa-search"></i>
                          </span>
                        </div> -->
                      </div>

                            </span></h6>
                            </div>
                            <div class="ms-panel-body">
                                      <div class="table-responsive">
                           <table class="table table-hover thead-success" id="example">
                              <thead>
                                 <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Visit Date</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">PRN</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Marital Status</th>
                                    <th scope="col">Category</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <th scope="row">1</th>
                                    <td>Chihoo Hwang</td>
                                    <td>Wordpress Template</td>
                                    <td>67384917</td>
                                    <td>67384917</td>
                                    <td>Wordpress Template</td>
                                    <td>67384917</td>
                                    <td>67384917</td>
                                 </tr>

                                 <tr>
                                    <th scope="row">1</th>
                                    <td>Nate Dawg</td>
                                    <td>Wordpress Template</td>
                                    <td>67384917</td>
                                    <td>67384917</td>
                                    <td>Wordpress Template</td>
                                    <td>67384917</td>
                                    <td>67384917</td>
                                 </tr>
                                 
                              </tbody>
                           </table>
                        </div>
                            </div>
                        </div>
                    </div>




                 <div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <p>My Admission Waiting List </p>
                            </div>
                            <div class="ms-panel-body">
                                
                         <div class="row">
                      




                   
                          </div>

                            </div>
                        </div>
                    </div>
</div>
</div>
@endsection