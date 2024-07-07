@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>View Materials</h6>
        <a href="/mortuary/add_new_material" class="ms-text-primary">Add New Material</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Material ID</th>
                        <th scope="col">Material Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Balance (Qty)</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no_id = 1; @endphp
                    @foreach($materials as $material)
                        <tr>
                            <td scope="row">{{ $no_id++ }}</td>
                            <td>{{ $material->MaterialID }}</td>
                            <td>{{ $material->MaterialName }}</td>
                            <td>{{ $material->category }}</td>
                            <td>{{ $material->Quantity }}</td>
                            <td>{{ $material->Unit }}</td>
                            <td>
                                <a href="{{ url('mortuary.view-material-details', $material->MaterialID) }}" target="_blank">
                                    <i class='fa fa-eye ms-text-success'></i> View
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