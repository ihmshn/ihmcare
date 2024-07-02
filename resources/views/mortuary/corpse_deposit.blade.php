@extends('layouts.mortuary')

@section('content')
@php
    use App\Models\mortuary\Mortuary;
@endphp

<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Corpse Deposit Form</h6>
            <a href="{{ url('mortuary/corpse_record') }}" class="ms-text-primary">Corpse's List</a>
        </div>
        <div class="ms-panel-body">
            <form class="needs-validation" action="{{ url('corpse_deposit') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="deposit_date">Date</label>
                        <span class="text-danger">{{ $errors->first('deposit_date') }}</span>
                        <div class="input-group">
                            <input type="date" class="form-control" name="deposit_date" value="{{ old('deposit_date') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="deposit_time">Time</label>
                        <div class="input-group">
                            <input type="time" class="form-control" name="deposit_time" value="{{ old('deposit_time') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="name_of_corpse">Name of Corpse</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name_of_corpse" value="{{ old('name_of_corpse') }}">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="age">Age</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sex">Sex</label>
                        <div class="input-group">
                            <select class="form-control" name="sex" required>
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="name_of_village">Name of Village</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name_of_village" value="{{ old('name_of_village') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="religion">Religion</label>
                        <div class="input-group">
                            <select class="form-control" name="religion" required>
                                <option value="">-- Select Religion --</option>
                                <option value="African Traditional &amp; Diasporic" {{ old('religion') == 'African Traditional &amp; Diasporic' ? 'selected' : '' }}>African Traditional &amp; Diasporic</option>
                                <option value="Atheist" {{ old('religion') == 'Atheist' ? 'selected' : '' }}>Atheist</option>
                                <option value="Buddhism" {{ old('religion') == 'Buddhism' ? 'selected' : '' }}>Buddhism</option>
                                <option value="Chinese traditional religion" {{ old('religion') == 'Chinese traditional religion' ? 'selected' : '' }}>Chinese traditional religion</option>
                                <option value="Christianity" {{ old('religion') == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                                <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Judaism" {{ old('religion') == 'Judaism' ? 'selected' : '' }}>Judaism</option>
                                <option value="Neo-Paganism" {{ old('religion') == 'Neo-Paganism' ? 'selected' : '' }}>Neo-Paganism</option>
                                <option value="Nonreligious" {{ old('religion') == 'Nonreligious' ? 'selected' : '' }}>Nonreligious</option>
                                <option value="Rastafarianism" {{ old('religion') == 'Rastafarianism' ? 'selected' : '' }}>Rastafarianism</option>
                                <option value="Secular" {{ old('religion') == 'Secular' ? 'selected' : '' }}>Secular</option>
                                <option value="Spiritism" {{ old('religion') == 'Spiritism' ? 'selected' : '' }}>Spiritism</option>
                                <option value="Other" {{ old('religion') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="date_of_death">Date OF Death</label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="date_of_death" value="{{ old('date_of_death') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="cause_of_death">Cause OF Death</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cause_of_death" value="{{ old('cause_of_death') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="place_of_death">Place OF Death</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="place_of_death" value="{{ old('place_of_death') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="complexion">Complexion</label>
                        <div class="input-group">
                            <select class="form-control" name="complexion" required>
                                <option value="">-- Select Complexion --</option>
                                <option value="Albino" {{ old('complexion') == 'Albino' ? 'selected' : '' }}>Albino</option>
                                <option value="Black" {{ old('complexion') == 'Black' ? 'selected' : '' }}>Black</option>
                                <option value="Dark" {{ old('complexion') == 'Dark' ? 'selected' : '' }}>Dark</option>
                                <option value="Yellow" {{ old('complexion') == 'Yellow' ? 'selected' : '' }}>Yellow</option>
                                <option value="Dark Brown" {{ old('complexion') == 'Dark Brown' ? 'selected' : '' }}>Dark Brown</option>
                                <option value="Fair" {{ old('complexion') == 'Fair' ? 'selected' : '' }}>Fair</option>
                                <option value="Light" {{ old('complexion') == 'Light' ? 'selected' : '' }}>Light</option>
                                <option value="Light Brown" {{ old('complexion') == 'Light Brown' ? 'selected' : '' }}>Light Brown</option>
                                <option value="Medium" {{ old('complexion') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Medium Brown" {{ old('complexion') == 'Medium Brown' ? 'selected' : '' }}>Medium Brown</option>
                                <option value="Olive" {{ old('complexion') == 'Olive' ? 'selected' : '' }}>Olive</option>
                                <option value="Ruddy" {{ old('complexion') == 'Ruddy' ? 'selected' : '' }}>Ruddy</option>
                                <option value="Sallow" {{ old('complexion') == 'Sallow' ? 'selected' : '' }}>Sallow</option>
                                <option value="Other" {{ old('complexion') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="deposit_amount">Deposit Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="deposit_amount" value="{{ old('deposit_amount') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="depositor_name">Depositor's Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="depositor_name" value="{{ old('depositor_name') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="relationship">Relationship</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="relationship" value="{{ old('relationship') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="address">Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                            <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="tally_number">Tally Number</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="tally_number" value="{{ old('tally_number') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="color">Color</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="color" value="{{ old('color') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="mortician_name">Mortician's Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="mortician_name" value="{{ old('mortician_name') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="cashier_signature">Cashier's Signature</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cashier_signature" value="{{ old('cashier_signature') }}" required>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="user_login" value="{{ session('username') }}">
                <button class="btn btn-primary mt-4 d-block w-100" type="submit">Deposit Corpse</button>
            </form>
        </div>
    </div>
</div>
@endsection
