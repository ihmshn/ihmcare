@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Ambulance Service</h6>
        <a href="/mortuary/add_ambulance_service" class="ms-text-primary">Add Ambulance Services</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">State</th>
                        <th scope="col">Place</th>
                        <th scope="col">Sienna</th>
                        <th scope="col">Jeep</th>
                        <th scope="col">Action</th>
                        <th scope="col">Book</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                    $resultset = DB::table('ambulance_service')->get();
                    $no_id = 1; @endphp
                    @foreach($resultset as $service)
                        <tr>
                            <td scope="row">{{ $no_id++ }}</td>
                            <td>{{ $service->state }}</td>
                            <td>{{ $service->place }}</td>
                            <td>{{ $service->sienna_amount }}</td>
                            <td>{{ $service->jeep_amount }}</td>
                            <td>
                                <a href="{{ route('mortuary.edit-ambulance-service', $service->id) }}">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('mortuary.book-ambulance', $service->id) }}" class="btn btn-sm btn-primary text-white">
                                    <i class='fas fa-book'></i> Book
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection