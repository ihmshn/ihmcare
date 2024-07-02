@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Corpse's List</h6>
        <a href="{{ url('mortuary/corpse_deposit') }}" class="ms-text-primary">Deposit New Corpse</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Admission Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Name</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Status</th>
                        <th scope="col">Days</th>
                        <th scope="col">Action</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($resultset as $index => $corpse)
                        <tr>
                            <td scope="row">{{ $index + 1 }}</td>
                            <td>{{ $corpse->datex }}</td>
                            <td>{{ $corpse->timex }}</td>
                            <td>{{ $corpse->name_of_corpse }}</td>
                            <td>{{ $corpse->sex }}</td>
                            <td>
                                <div class="badge badge-{{ $corpse->status == 'ongoing' ? 'success' : 'danger' }} badge-shadow p-2">
                                    {{ $corpse->status }}
                                </div>
                            </td>
                            <td>
                                @if ($corpse->status != "ongoing")
                                    Settled
                                @else
                                    {{ $corpse->daysDifference }} days
                                @endif
                            </td>
                            <td>
                                <!-- <a href="{{ url('mortuary/edit_corpse_details&&details=' . $corpse->case_id) }}">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a> -->

                                <a href="{{ route('mortuary.edit_corpse_details', ['case_id' => $corpse->case_id]) }}">
                                    <i class='fas fa-pencil-alt ms-text-warning'></i>
                                </a>
                           
                                <a href="{{ route('mortuary.view_corpse_details', ['case_id' => $corpse->case_id]) }}">
                                    <i class='fa fa-eye ms-text-primary'></i>
                                </a>

                            </td>
                            <td>
                                @if ($corpse->status != "ongoing")
                                    <a class="btn btn-sm btn-success text-white disabled" style="margin-top: -3px;" href="#">Discharged</a>
                                @else
                                    <a class="btn btn-sm btn-danger text-white" style="margin-top: -3px;" href="{{ route('mortuary.discharge_corpse', ['case_id' => $corpse->case_id]) }}" target="_blank">Discharge</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No records found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
