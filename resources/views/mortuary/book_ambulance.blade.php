@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Ambulance Service Booking</h6>
        <a href="" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"></i> Back
        </a>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Book Ambulance Service</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4 mb-3">
                                    <label for="service_id">Service ID</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-tag"></i></span>
                                        </div>
                                        <input type="text" class="form-control bg-light" name="service_id" readonly value="{{ $service->service_id }}">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" readonly name="state" value="{{ $service->state }}">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="place">Place</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" readonly name="place" value="{{ $service->place }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3 mb-3">
                                    <label for="vehicle">Vehicle Type</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-truck"></i></span>
                                        </div>
                                        <select name="vehicle" class="form-control" id="vehicle" onchange="fetchVehiclePrice();">
                                            <option value="">--Select Vehicle--</option>
                                            <option value="Sienna">Sienna</option>
                                            <option value="Jeep">Jeep</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="amount">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-tag"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="amount" id="amount" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="booked_by">Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="booked_by" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 mb-3">
                                    <label for="datex">Service Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="datex" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="start_time">Start Time</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </div>
                                        <input type="time" class="form-control" name="start_time" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="end_time">End Time</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </div>
                                        <input type="time" class="form-control" name="end_time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12"><br />
                                <input type="submit" class="btn btn-primary form-control" value="Book Ambulance Service">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function fetchVehiclePrice() {
        var vehicle = document.getElementById('vehicle').value;
        var service_id = document.getElementById('service_id').value;
        var url = `/ajax/get-vehicle-price/${service_id}/${vehicle}`;
        
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (vehicle === "Sienna") {
                    document.getElementById('amount').value = data.sienna_amount;
                } else if (vehicle === "Jeep") {
                    document.getElementById('amount').value = data.jeep_amount;
                }
            })
            .catch(error => console.error('Error fetching vehicle price:', error));
    }
</script>
@endsection