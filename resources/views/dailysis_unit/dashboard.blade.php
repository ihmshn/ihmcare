@extends('layouts.dailysis_unit')
@section('content')


<div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <p>Daily Records</p>
                            </div>
                            <div class="ms-panel-body">
                                
                         <div class="row">
                         
                         <div class="col-xl-3 col-md-6">
                            <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                                <div class="ms-card-body media">
                                    <div class="media-body">
                                        <h6 style="font-size: 11px;">Total Sessions Today</h6>
                                        <p class="ms-card-change">55</p> <!-- Replace with dynamic value -->
                                        <p class="fs-12 mt-4 text-center bg-info p-2">
                                            <a href="?action=ViewSessionsToday" class="text-white">View <i class="fas fa-arrow-circle-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <i class="fas fa-procedures"></i>
                            </div>
                        </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Pending Payments</h6>
                                    <p class="ms-card-change">0</p> <!-- Replace with dynamic value -->
                                    <p class="fs-12 mt-4 text-center bg-success p-2">
                                        <a href="?action=ViewPendingPayments" class="text-white">View <i class="fas fa-arrow-circle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6 style="font-size: 12px;">Total Patients</h6>
                                    <p class="ms-card-change">30</p> <!-- Replace with dynamic value -->
                                    <p class="fs-12 mt-4 text-center bg-danger p-2">
                                        <a href="?action=ViewPatients" class="text-white">View <i class="fas fa-arrow-circle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    
                   <div class="col-xl-3 col-md-6">
                    <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 style="font-size: 12px;">Inventory Alerts</h6>
                                <p class="ms-card-change">0</p> <!-- Replace with dynamic value -->
                                <p class="fs-12 mt-4 text-center bg-warning p-2">
                                    <a href="?action=ViewInventoryAlerts" class="text-white">View <i class="fas fa-arrow-circle-right"></i></a>
                                </p>
                            </div>
                        </div>
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>

                </div>

                            </div>
                        </div>
                    </div>

                    

                
@endsection