@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Adjust Service</h6>
        <a href="/mortuary/mortuary_service" class="ms-text-primary">
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
                        <form action="{{ route('mortuary.update-service', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>Service Name</span>
                                    <input type="text" class="form-control" name="service_name" value="{{ $service->service_name }}" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Price</span>
                                    <input type="text" class="form-control" name="price" value="{{ $service->price }}" required>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="details">Description</label>
                                    <select class="form-control" name="details" required>
                                        <option>{{ $service->details }}</option>
                                        <option value="">-- Select Description --</option>
                                        <option>Per day</option>
                                        <option>Depended</option>
                                        <option>Big</option>
                                        <option>Medium</option>
                                        <option>Small</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <input type="submit" class="btn btn-primary form-control" value="Update Service">
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