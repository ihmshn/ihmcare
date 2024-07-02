@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Mortuary Bill</h6>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Case ID</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $index => $bill)
                    <tr>
                        <td scope="row">{{ $index + 1 }}</td>
                        <td>{{ $bill->corpse_id }}</td>
                        <td>{{ number_format($bill->amount_paid) }}</td>
                        <td>{{ number_format($bill->total_amount) }}</td>
                        <td>
                            @if($bill->payment_status == 'Paid')
                            <span class="badge badge-success p-2">{{ $bill->payment_status }}</span>
                            @else
                            <span class="badge badge-warning p-2">{{ $bill->payment_status }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('mortuary.bill_details', ['bill_id' => $bill->bill_id]) }}" target="_blank" class="btn btn-primary" style="margin-top:-3px;">
                                <i class='fa fa-eye ms-text-white'></i> View
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