@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Add Ambulance Service</h6>
        <a href="/mortuary/ambulance_services" class="ms-text-primary">View Services</a>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Add New Ambulance Service</h6>
                    </div>
                    <div class="card-body">
                        <form action="ambulance_services" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>State</span>
                                    <input type="text" class="form-control" name="state" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Place</span>
                                    <input type="text" class="form-control" name="place" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Sienna Amount</span>
                                    <input type="text" class="form-control" name="sienna_amount" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Jeep Amount</span>
                                    <input type="text" class="form-control" name="jeep_amount" required>
                                </div>
                                <div class="col-lg-12"><br />
                                    <input type="submit" class="btn btn-primary form-control" value="Add Service">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection