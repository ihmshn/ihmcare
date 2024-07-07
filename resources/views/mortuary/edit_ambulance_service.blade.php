@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Adjust Ambulance Service Price</h6>
        <a href="" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"></i>
        </a>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Edit Ambulance Service Price</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom001">State</label>
                                    <div class="input-group">
                                        <select readonly name="state" class="form-control">
                                            <option>{{ $service->state }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom002">Place</label>
                                    <div class="input-group">
                                        <input class="form-control" readonly name="place" value="{{ $service->place }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom002">Sienna Amount</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="sienna_amount" value="{{ $service->sienna_amount }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom002">Jeep Amount</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="jeep_amount" value="{{ $service->jeep_amount }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12"><br />
                                <input type="hidden" name="service_id" value="{{ $service->service_id }}">
                                <input type="submit" class="btn btn-primary form-control" value="Update Ambulance Service Price">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection