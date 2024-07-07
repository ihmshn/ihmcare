@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Mark Complete Ambulance Service</h6>
        <a href="{{ route('mortuary.ambulance-bookings') }}" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"></i> Back
        </a>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Booking Details</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mortuary.mark-complete-booked-service') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-3">
                                    <label for="booking_id">Booking ID</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="booking_id" value="{{ $booking->booking_id }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="service_id">Service ID</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="service_id" value="{{ $booking->service_id }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mb-3">
                                    <label for="state">State</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="state" value="{{ $booking->state }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="place">Place</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="place" value="{{ $booking->place }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="vehicle_type">Vehicle</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="vehicle_type" value="{{ $booking->vehicle_type }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status">Status</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="status" value="{{ $booking->status }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="booked_by">Booked By</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="booked_by" value="{{ $booking->booked_by }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="booking_date">Date Booked</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="booking_date" value="{{ $booking->booking_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="booked_start">Book Time</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="booked_start" value="{{ $booking->booked_start }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="added_by">Performed By</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="added_by" value="{{ $staff->first_name . ' ' . $staff->last_name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12"><br />
                                <input type="hidden" name="user_login" value="">
                                @if($booking->status == "Completed")
                                    <input style="height:50px !important;" class="btn btn-success form-control disabled" value="Ambulance Service Completed">
                                @else
                                    <input type="submit" name="mark_completeS" style="height:50px !important;" class="btn btn-primary form-control" value="Mark Complete Ambulance Service">
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection