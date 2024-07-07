@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Price List Edit</h6>
        <a href="{{ route('mortuary.mortuary_price_list') }}" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"></i>
        </a>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Edit</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>Name</span>
                                    <input type="text" class="form-control" name="price_name" value="{{ $priceItem->price_name }}" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Price</span>
                                    <input type="text" class="form-control" name="amount" value="{{ $priceItem->amount }}" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="description">Description</label>
                                    <select class="form-control" name="description" required>
                                        <option>{{ $priceItem->description }}</option>
                                        <option value="">-- Select Description --</option>
                                        <option>per day till the body leaves</option>
                                        <option>per day till out</option>
                                        <option>per week</option>
                                        <option>per month</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="freeday">Free Days</label>
                                    <select class="form-control" name="freeday" required>
                                        <option>{{ $priceItem->freeday }}</option>
                                        <option>No</option>
                                        <option>1 day free</option>
                                        <option>3 days free</option>
                                        <option>7 days free</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <input type="hidden" name="price_id" value="{{ $priceItem->id }}">
                                    <input type="submit" class="btn btn-primary form-control" value="Update Price List">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection