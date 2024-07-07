@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Ambulance Service</h6>
        <a href="/mortuary/ambulance_services" class="ms-text-primary">Book Ambulance Services</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Booking ID</th>
                        <th scope="col">State</th>
                        <th scope="col">Place</th>
                        <th scope="col">Vehicle</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no_id = 1; @endphp
                    @foreach($resultset as $booking)
                        <tr>
                            <td scope="row">{{ $no_id++ }}</td>
                            <td>{{ $booking->booking_id }}</td>
                            <td>{{ $booking->state }}</td>
                            <td>{{ $booking->place }}</td>
                            <td>{{ $booking->vehicle_type }}</td>
                            <td>{{ $booking->amount }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>
                                @if($booking->status == "Ongoing")
                                    <span class="badge badge-success p-2">{{ $booking->status }}</span>
                                @else
                                    <span class="badge badge-secondary p-2">{{ $booking->status }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog"></i> More
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="ms-dropdown-list">
                                            <a class="media p-2" href="{{ url('mortuary/view_booked_service', $booking->booking_id) }}">
                                                <div class="media-body">
                                                    <span><i class='fas fa-eye text-success'></i> View Details</span>
                                                </div>
                                            </a>
                                            @if($booking->status == "Ongoing")
                                                <a class="media p-2" href="{{ url('mortuary/mark_complete_booked_services', $booking->booking_id) }}">
                                                    <div class="media-body">
                                                        <span><i class="fas fa-edit text-warning"></i> Mark Complete</span>
                                                    </div>
                                                </a>
                                            @else
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span><i class="fas fa-check text-success"></i> Completed</span>
                                                    </div>
                                                </a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection