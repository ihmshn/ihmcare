@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Request List (MORTUARY)</h6>
        <a href="#mymodaladdR" data-toggle="modal" class="btn btn-primary ms-text-white">
            <i class="fa fa-plus-square"></i> New Form Request
        </a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Date</th>
                        <th scope="col">Item</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Disbursed</th>
                        <th scope="col">Bal(Qty)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Department</th>
                        <th scope="col">Requester</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($resultset as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->requisition_date }}</td>
                            <td>{{ $data->item }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->qty_disbursed }}</td>
                            <td>{{ $data->quantity_bal }}</td>
                            <td>{{ $data->requisition_status }}</td>
                            <td>{{ $data->department }}</td>
                            <td>{{ $data->requester }}</td>
                            <td>{{ $data->branch }}</td>
                            <td>
                                @if($data->return_status == 'true')
                                    <a style="margin-top: -3px;" class="btn btn-sm btn-warning disabled" href="">
                                        <i class="fa fa-undo ms-text-white" style="font-size: 12px;"></i> Returned
                                    </a>
                                @elseif ($data->requisition_status == 'Pending')
                                    <a style="margin-top: -3px;" class="btn btn-sm btn-primary disabled" href="">
                                        <i class="fa fa-clock ms-text-white" style="font-size: 12px;"></i> Not Approved
                                    </a>
                                @else
                                    <a style="margin-top: -3px;" href="{{ route('mortuary.return_request', $data->id) }}" class="btn btn-sm btn-warning" target="_blank">
                                        <i class="fa fa-undo ms-text-white" style="font-size: 12px;"></i> Return
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="mymodaladdR" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header ms-modal-header-radius-0">
                <h4 class="modal-title text-white">New Request</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Request Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form action="{{ route('mortuary.new_request') }}" method="POST">
                                @csrf
                                <div class="items-container">
                                    <div class="row mx-auto item" data-repeater-item>
                                        <div class="mb-3 col-lg-5">
                                            <label class="form-label d-flex justify-content-between">Item Name</label>
                                            <select class="form-control" name="item[]">
                                                <option>--Select Item--</option>
                                                
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label class="form-label" for="quantity">Qty</label>
                                            <input type="number" class="form-control" name="quantity[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-3 align-self-center">
                                        <div class="d-grid">
                                            <button type="button" class="form-control btn btn-success mt-3 add-item-btn">
                                                <i class="fa fa-plus-circle"></i> Add Item
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <button class="btn btn-light mt-4 d-inline w-20 float-right" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary mt-4 d-inline w-20 float-right mr-3" type="submit">Send Request</button>&nbsp;
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const addItemButton = document.querySelector('.add-item-btn');
        addItemButton.addEventListener('click', addItem);

        function addItem() {
            const itemsContainer = document.querySelector('.items-container');
            const itemTemplate = document.querySelector('[data-repeater-item]').cloneNode(true);
            itemsContainer.appendChild(itemTemplate);
        }
    });
</script>
@endsection