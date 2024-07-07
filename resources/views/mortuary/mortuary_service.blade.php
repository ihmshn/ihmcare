@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Mortuary Other Service List</h6>
        <a href="/mortuary/add_services" class="ms-text-primary">Add New Service</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Details</th>
                        <th scope="col">Action</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no_id = 1; @endphp
                    @foreach($resultset as $service)
                        <tr>
                            <td scope="row">{{ $no_id++ }}</td>
                            <td>{{ $service->service_name }}</td>
                            <td>{{ $service->price }}</td>
                            <td>{{ $service->details }}</td>
                            <td>
                                <a href="{{ route('mortuary.edit_service', $service->id) }}" class="btn btn-warning text-white">
                                    <i class="fas fa-adjust"></i> Adjust
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('mortuary.delete-service', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-responsive text-white">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection