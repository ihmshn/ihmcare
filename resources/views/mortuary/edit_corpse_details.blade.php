@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp


<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Corpse's Information</h6>
        <a href="/mortuary/corpse_record" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"></i>
        </a>
    </div>
    <div class="ms-panel-body">
        <div class="row">   
            <div class="col-lg-12"> 
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Corpse ID: <b class="text-dark">{{ $corpse->case_id }}</b></h6>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>Name</span>
                                    <input type="text" class="form-control" name="name_of_case" value="{{ $corpse->name_of_corpse }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Sex</span>
                                    <select class="form-control" name="sex">
                                        <option>{{ $corpse->sex }}</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>From</span>
                                    <input type="text" class="form-control" name="name_of_village" value="{{ $corpse->name_of_village }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Religion</span>
                                    <select class="form-control" name="religion">
                                        <option>{{ $corpse->religion }}</option>
                                        <!-- Add other options here -->
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Date Of Death</span>
                                    <input type="date" class="form-control datepicker" name="DateOfDeath" value="{{ $corpse->dateofdeath }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Cause Of Death</span>
                                    <input type="text" class="form-control" name="CauseOfDeath" value="{{ $corpse->causeofdeath }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Place Of Death</span>
                                    <input type="text" class="form-control" name="PlaceOfDeath" value="{{ $corpse->placeofdeath }}">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <span>Complexion</span>
                                    <select class="form-control" name="complexion">
                                        <option>{{ $corpse->complexion }}</option>
                                        <!-- Add other options here -->
                                    </select>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <span>Age</span>
                                    <input type="text" class="form-control" name="age" value="{{ $corpse->age }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Depositor Name</span>
                                    <input type="text" class="form-control" name="depositor_name" value="{{ $corpse->depositor_name }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Relationship</span>
                                    <input type="text" class="form-control" name="relationship" value="{{ $corpse->relationship }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Address</span>
                                    <input type="text" class="form-control" name="address" value="{{ $corpse->address }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Phone</span>
                                    <input type="text" class="form-control" name="phone" value="{{ $corpse->phone }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Deposit Amount</span>
                                    <input type="text" class="form-control" name="deposit_amount" value="{{ $corpse->deposit_amount }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Tally Number</span>
                                    <input type="text" class="form-control" name="tally_number" value="{{ $corpse->tally_number }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Color</span>
                                    <input type="text" class="form-control" name="color" value="{{ $corpse->color }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Mortician Name</span>
                                    <input type="text" class="form-control" name="mortician_name" value="{{ $corpse->mortician_name }}">
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <span>Additional Notes</span>
                                    <textarea class="form-control" id="summernote" name="AdditionalNotes">{{ $corpse->additionalnotes }}</textarea>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <input type="hidden" name="old_image" value="{{ $corpse->contract_form_image }}">
                                    <span>Upload Contract Form</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="validatedCustomFile" onchange="previewFile()">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose Contract Form file...</label>
                                    </div>
                                    <img id="file-preview" class="img-fluid mt-5" src="#" alt="File Preview" style="max-width: 100%; display: none;">
                                </div>
                                <div class="col-lg-12"><br />
                                    <input hidden type="text" value="{{session('username')}}" name="user_login">
                                    <input hidden type="text" value="{{ $corpse->case_id }}" name="case_id">
                                    <input type="submit" name="Edit_case" style="height:50px !important;" class="btn btn-primary form-control" value="Update Record">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewFile() {
        const fileInput = document.querySelector('#validatedCustomFile');
        const filePreview = document.querySelector('#file-preview');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                filePreview.style.display = 'block';
                filePreview.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>

@endsection
