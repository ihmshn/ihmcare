@extends('layouts.centralstore')
@section('content')

<div class="col-xl-12 col-md-12">
<div class="ms-panel">
                            <div class="ms-panel-header">
                                <p>Central Store</p>
                            </div>
                            <div class="ms-panel-body">
    <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>New Request</h6>
                                    <p class="ms-card-change"> 70</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-danger ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>Pending Request</h6>
                                    <p class="ms-card-change"> 0</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>Pharmacy Request</h6>
                                    <p class="ms-card-change"> 37</p>
                                     <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-right"></i></a></p>
                                </div>
                            </div>
                           <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>Expired Item</h6>
                                    <p class="ms-card-change"> 8686</p>
                                    <p class="fs-12"><a href="" class="text-white">View list <i class="fas  fa-arrow-right"></i></a></p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header bg-success">
                                <h6 class="text-white">New Requisition (Pharmacy) <span class="float-right"><span class="badge badge-gradient-warning p-1">37</span> <span class="badge badge-pill badge-info p-1">View all</span></span></h6>
                            </div>
                            <div class="ms-panel-body">
                                <ul class="ms-activity-log">

                                    <li>
                                        <h6>DRIP SET</h6>
                                        <p class="fs-14">From: PHARMACY | in 17 minutes <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                    <li>
                                        <h6>5% DEXTROSE IN WATER</h6>
                                        <p class="fs-14">From: PHARMACY | in 17 minutes <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                    <li>
                                        <h6>FASTUM GEL</h6>
                                        <p class="fs-14">From: PHARMACY | in 17 minutes <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                    <li>
                                        <h6>VITAMIN C 100MG TAB</h6>
                                        <p class="fs-14">From: PHARMACY | in 17 minutes <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="ms-panel ms-panel-fh">
                            <div class="ms-panel-header bg-primary">
                                <h6 class="text-white">New Requisition (Others) <span class="float-right"><span class="badge badge-gradient-warning p-1">70</span> <span class="badge badge-pill badge-info p-1">View all</span></span></h6>
                            </div>
                            <div class="ms-panel-body">
                                <ul class="ms-activity-log">
                                    <li>
                                        <h6>COTTON WOOL</h6>
                                        <p class="fs-14">From: OPERATIONS | in 4 hours <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                    <li>
                                        <h6>DISPOSABLE GLOVES</h6>
                                        <p class="fs-14">From: OPERATIONS | in 4 hours <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                    <li>
                                        <h6>DISPOSABLE GLOVES</h6>
                                        <p class="fs-14">From: OPERATIONS | in 4 hours <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>


                                    <li>
                                        <h6>SPANNER SET</h6>
                                        <p class="fs-14">From: OPERATIONS | in 3 hours <span class="float-right" style="font-size:18px;"> <i class="fas fa-shopping-cart text-warning"></i></span></p>
                                        <hr>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>


                    </div>
                    </div>
                   

@endsection