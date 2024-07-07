@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Add New Material</h6>
    </div>
    <div class="ms-panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Add New Material</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>Material Name</span>
                                    <input type="text" class="form-control" name="material_name" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Category</span>
                                    <select class="form-control" name="category" required>
                                        <option value="">--Choose Category--</option>
                                        <option>Embalming Fluids</option>
                                        <option>Embalming Instruments</option>
                                        <option>Body Bags</option>
                                        <option>Autopsy Supplies</option>
                                        <option>Cosmetic / Restorative</option>
                                        <option>Caskets / Coffins</option>
                                        <option>Funeral Stationary</option>
                                        <option>Clothing / Linens</option>
                                        <option>Cooling Unit</option>
                                        <option>Transportation Equipment</option>
                                        <option>Identification / Record Keeping</option>
                                        <option>Facility Maintenace</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Quantity</span>
                                    <input type="number" class="form-control" name="quantity" required>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Unit</span>
                                    <select class="form-control" name="unit" required>
                                        <option value="">--Choose Unit--</option>
                                        <option>Pieces</option>
                                        <option>Gallons</option>
                                        <option>Liters</option>
                                        <option>Fluid Ounces</option>
                                        <option>Pounds</option>
                                        <option>Kilograms</option>
                                        <option>Feet</option>
                                        <option>Meters</option>
                                        <option>Box</option>
                                        <option>Bags</option>
                                        <option>Square Feet</option>
                                        <option>Square Meters</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="validationCustom002">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12"><br />
                                    <input type="submit" name="AddMaterial" style="height:50px !important;" class="btn btn-primary form-control" value="Add New Material">
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