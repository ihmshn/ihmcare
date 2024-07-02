@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>Corpse's Information</h6>
        <a href="/mortuary/corpse_record" class="ms-text-primary">
            <i class="fas fa-arrow-circle-left float-left" style="font-size: larger;"> </i>
        </a>
    </div>
    <div class="ms-panel-body">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if($corpse)
        <div class="row">   
            <div class="col-lg-12"> 
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 text-primary">Corpse ID: <b class="text-dark">{{ $corpse->case_id }}</b></h6>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3">
                                    <span>Date</span>
                                    <input readonly type="text" class="form-control" name="datex" value="{{ $corpse->datex }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Deposit Time</span>
                                    <input readonly type="text" class="form-control" name="LevelName" value="{{ $corpse->timex }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Name</span>
                                    <input readonly type="text" class="form-control" name="name" value="{{ $corpse->name_of_corpse }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Sex</span>
                                    <input readonly type="text" class="form-control" name="sex" value="{{ $corpse->sex }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>From</span>
                                    <input readonly type="text" class="form-control" name="village" value="{{ $corpse->name_of_village }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Religion</span>
                                    <input readonly type="text" class="form-control" name="religion" value="{{ $corpse->religion }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Date Of Death</span>
                                    <input readonly type="text" class="form-control" name="DateOfDeath" value="{{ $corpse->dateofdeath }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Cause Of Death</span>
                                    <input readonly type="text" class="form-control" name="CauseOfDeath" value="{{ $corpse->causeofdeath }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Place Of Death</span>
                                    <input readonly type="text" class="form-control" name="PlaceOfDeath" value="{{ $corpse->placeofdeath }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Complexion</span>
                                    <input readonly type="text" class="form-control" name="complexion" value="{{ $corpse->complexion }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Depositor Name</span>
                                    <input readonly type="text" class="form-control" name="depositor_name" value="{{ $corpse->depositor_name }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Relationship</span>
                                    <input readonly type="text" class="form-control" name="relationship" value="{{ $corpse->relationship }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Address</span>
                                    <input readonly type="text" class="form-control" name="depositor_name" value="{{ $corpse->address }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Phone</span>
                                    <input readonly type="text" class="form-control" name="phone" value="{{ $corpse->phone }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Deposit Amount</span>
                                    <input readonly type="text" class="form-control" name="deposit_amount" value="{{ $corpse->deposit_amount }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Tally Number</span>
                                    <input readonly type="text" class="form-control" name="tally_number" value="{{ $corpse->tally_number }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Color</span>
                                    <input readonly type="text" class="form-control" name="color" value="{{ $corpse->color }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Mortician Name</span>
                                    <input readonly type="text" class="form-control" name="mortician_name" value="{{ $corpse->mortician_name }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Cashier </span>
                                    <input readonly type="text" class="form-control" name="cashier_signature" value="{{ $corpse->cashier_signature }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Registered By </span>
                                    @if($staff)
                                        <input readonly type="text" class="form-control" name="entered_by" value="{{ $staff->first_name }} {{ $staff->last_name }}">
                                    @else
                                        <input readonly type="text" class="form-control" name="entered_by" value="N/A">
                                    @endif
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Status </span>
                                    <input readonly type="text" class="form-control" name="status" value="{{ $corpse->status }}">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <span>Additional Notes </span>
                                    <textarea readonly class="form-control" name="status">{{ $corpse->additionalnotes }}</textarea>
                                </div>
                                <div class="col-lg-12"><br />
                                    @if(empty($corpse->contract_form_image))
                                        <a class="btn btn-primary form-control btn-block text-white">
                                            <i class="fa fa-warning fa-fw">  </i> Contract Form Not Uploaded Yet
                                        </a>
                                    @else
                                        <a class="btn btn-primary form-control btn-block" href="{{ asset('caseDocument/'.$corpse->contract_form_image) }}" target="_blank">
                                            <i class="fa fa-eye fa-fw">  </i> View Contract Form
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-danger">Corpse details not found.</div>
        @endif
    </div>
</div>
@endsection
