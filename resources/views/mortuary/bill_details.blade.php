@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>View Mortuary Bill</h6>
        <a href="" onclick="window.close();" class="ms-text-primary"><i class="fas fa-times" style="font-size: larger;"></i> Close </a>
    </div>
    <div class="ms-panel-body">
        @php  
            $bill_id = request()->get('details');
            $GetData = DB::table('mortuary_bill')->where('bill_id', $bill_id)->first();
            if ($GetData) {
                $GetData1 = DB::table('corpsedeposit')->where('case_id', $GetData->corpse_id)->first();
                $bal = $GetData->total_amount - $GetData->amount_paid;
            }
        @endphp
        @if ($GetData)
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary"></h6>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom001">Name</label>
                                    <div class="input-group">
                                        <input class="form-control border-0" readonly name="MaterialName" value="{{ $GetData1->name_of_corpse ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom002">Case ID</label>
                                    <div class="input-group">
                                        <input class="form-control border-0" readonly name="corpse_id" value="{{ $GetData->corpse_id }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom001">Total Bill</label>
                                    <div class="input-group">
                                        <input style="background-color:#E2F1FF; color:#5B88CA;" class="form-control border-0" readonly name="total_amount" value="{{ number_format($GetData->total_amount) }}">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom002">Amount Paid</label>
                                    <div class="input-group">
                                        <input style="background-color:#E2FFEF; color:#2BC06E;" class="form-control border-0" readonly name="Quantity" value="{{ number_format($GetData->amount_paid) }}">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom002">Balance</label>
                                    <div class="input-group">
                                        <input style="background-color:#FEEBEA; color:#F1473F;" class="form-control border-0" readonly name="Quantity" value="{{ number_format($bal) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom002">Payment Status</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="Unit" value="{{ $GetData->payment_status }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom002">Depositor Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0" readonly name="added_by" value="{{ $GetData->payer_name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom002">Additional Note</label>
                                    <div class="input-group">
                                        <textarea class="form-control border-0" readonly>{{ $GetData->additional_notes }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    @if($GetData1->status == 'discharged')
                                        <a href="" class="btn btn-primary mt-4 d-block text-white w-100 disabled">Completed</a>
                                    @else
                                        <a href="#mymodal" class="btn btn-primary mt-4 d-block text-white w-100" data-toggle="modal">Add New Bill</a>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    @if($GetData1->status == 'discharged')
                                        <a href="" class="btn btn-success mt-4 d-block text-white w-100 disabled">Completed</a>
                                    @else
                                        <a href="#mymodal2" class="btn btn-success mt-4 d-block text-white w-100" data-toggle="modal">Make Payment</a>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Bills</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped thead-white w-100">
                                    <thead>
                                        <tr class="bg-danger text-white">
                                            <th scope="col">SN</th>
                                            <th scope="col">Bill / Service Description</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color:#FEEBEA; color:#F1473F;">
                                        @php
                                            $no_id = 1;
                                            $resultset = DB::table('bill_log')->where('reference_id', $GetData->corpse_id)->get();
                                        @endphp
                                        @foreach($resultset as $bill)
                                            <tr>
                                                <td scope="row">{{ $no_id++ }}</td>
                                                <td>{{ $bill->bill_description }}</td>
                                                <td>{{ $bill->quantity }}</td>
                                                <td>{{ number_format($bill->unit_price) }}</td>
                                                <td>{{ number_format($bill->total) }}</td>
                                                <td>{{ $bill->added_date }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Payments</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped thead-white w-100">
                                    <thead>
                                        <tr class="bg-success text-white">
                                            <th scope="col">SN</th>
                                            <th scope="col">Payment Description</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Payment Date</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color:#E2FFEF; color:#2BC06E;">
                   
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
            <p>No data found for the provided bill ID.</p>
        @endif
    </div>
</div>

<!-- New Bill Modal -->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header ms-modal-header-radius-0">
                <h4 class="modal-title text-white">New Bill</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Bill Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form method="post" action="">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom002">Bill Description</label>
                                        <div class="input-group">
                                            <input type="hidden" name="corpse_id" value="">
                                            <textarea rows="2" class="form-control" name="bill_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Qty</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="quantity" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Unit Amount</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="unit_price" value="0" min="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom002">Total Amount</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="total" value="0" min="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Save Bill</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="mymodal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make Payment</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Payment Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form method="post" action="">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom002">Payment Description</label>
                                        <div class="input-group">
                                            <input type="hidden" name="corpse_id" value="">
                                            <textarea rows="2" class="form-control" name="bill_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom002">Amount</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="total" value="0" min="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Save Payment</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection