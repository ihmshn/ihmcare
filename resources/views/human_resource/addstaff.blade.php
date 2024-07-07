@extends('layouts.human_resource')
@section('content')
@php
    use App\Models\human_resource\HR;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6>Add Hospital Staff</h6>
            <a href="" class="ms-text-primary">Staff List</a>
        </div>
        <div class="ms-panel-body">
            <form class="needs-validation" action="" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="title">Title</label>
                        <select class="form-control" name="title" required>
                            <option value="">-- Select Title --</option>
                            @foreach($titles as $title)
                                <option value="{{ $title->title }}">{{ $title->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="">-- Select Gender --</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Staff Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Personal Email">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-control" name="marital_status" required>
                            <option value="">-- Select --</option>
                            <option value="Single" {{ old('marital_status') == 'Single' ? 'selected' : '' }}>Single</option>
                            <option value="Married" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>Married</option>
                            <option value="Divorced" {{ old('marital_status') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                        </select>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="phone">Staff Mobile Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required placeholder="Telephone number">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="employment_date">Employment Date</label>
                        <input type="date" class="form-control" name="employment_date" value="{{ old('employment_date') }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="role">Role</label>
                        <select class="form-control" name="role" required>
                            <option value="">-- Select --</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->role }}">{{ $role->role }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="designation">Designation</label>
                        <select class="form-control" name="designation" required>
                            <option value="">-- Select --</option>
                            @foreach($designations as $designation)
                                <option value="{{ $designation->designation }}">{{ $designation->designation }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="department_type">Type</label>
                        <select class="form-control" name="department_type" required>
                            <option value="">-- Select --</option>
                            @foreach($departmentTypes as $departmentType)
                                <option value="{{ $departmentType->type }}">{{ $departmentType->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="department">Department</label>
                        <select class="form-control" name="department" required>
                            <option value="">-- Select --</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->department }}">{{ $department->department }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="unitname">Unit</label>
                        <select class="form-control" name="unitname" required>
                            <option value="">-- Select --</option>
                            @foreach($units as $unit)
                                <option value="{{ $unit->unit }}">{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="blood_group">Staff Blood Group</label>
                        <select class="form-control" name="blood_group" required>
                            <option value="">-- Select Blood Group --</option>
                            <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                            <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                            <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                            <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                            <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                            <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                            <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                            <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="current_address">Current Address</label>
                        <input type="text" class="form-control" name="current_address" value="{{ old('current_address') }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State of Origin</label>
                        <select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required>
                            <option value=""> Select State</option>
                            <option value="Abuja">Abuja</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nassarawa">Nassarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="lga">L.G.A OF Origin</label>
                        <select name="lga" id="lga" class="form-control select-lga" required>
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="grade_level">Grade Level</label>
                        <select class="form-control" name="grade_level" required>
                            <option value="">-- Select --</option>
                            @foreach($gradeLevels as $gradeLevel)
                                <option value="{{ $gradeLevel->grade_level }}">{{ $gradeLevel->grade_level }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="next_of_kin">Next Of Kin</label>
                        <input type="text" class="form-control" name="next_of_kin" value="{{ old('next_of_kin') }}" required placeholder="Next of Kin">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="emergency_contact_name">Emergency Contact Name</label>
                        <input type="text" class="form-control" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="emergency_contact_phone">Emergency Contact Phone</label>
                        <input type="text" class="form-control" name="emergency_contact_phone" value="{{ old('emergency_contact_phone') }}" required placeholder="Next of Kin">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="emergency_contact_relationship">Emergency Contact Relationship</label>
                        <select class="form-control" name="emergency_contact_relationship" required>
                            <option value="">Select Relationship</option>
                            <option value="parent">Parent or Guardian</option>
                            <option value="spouse">Spouse or Partner</option>
                            <option value="sibling">Sibling</option>
                            <option value="child">Child</option>
                            <option value="relative">Relative</option>
                            <option value="friend">Friend</option>
                            <option value="coworker">Coworker</option>
                            <option value="neighbor">Neighbor</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="staff_category">Staff Category</label>
                        <select class="form-control" name="staff_category" required>
                            <option value="">-- Select --</option>
                            @foreach($staffCategories as $staffCategory)
                                <option value="{{ $staffCategory->category }}">{{ $staffCategory->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="staff_id">Employee ID</label>
                        <input type="text" class="form-control" name="staff_id" value="{{ $invoiceId }}" required>
                    </div>
                    <input type="hidden" name="user_login" value="{{ auth()->user()->username }}">
                    <button class="btn btn-primary mt-4 d-block w-100" type="submit">Register Staff</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    function toggleLGA(state) {
        const lgaSelect = document.getElementById('lga');
        lgaSelect.innerHTML = ''; // Clear previous options

        // Define LGAs for each state
        const lgas = {
            "Abuja": ["Abaji", "Bwari", "Gwagwalada", "Kuje", "Kwali", "Municipal Area Council"],
            "Abia": ["Aba North", "Aba South", "Arochukwu", "Bende", "Ikwuano", "Isiala Ngwa North", "Isiala Ngwa South", "Isuikwuato", "Obi Ngwa", "Ohafia", "Osisioma", "Ugwunagbo", "Ukwa East", "Ukwa West", "Umu Nneochi", "Umuahia North", "Umuahia South"],
            // Add LGAs for other states
        };

        // Populate LGAs based on selected state
        if (state.value in lgas) {
            lgas[state.value].forEach(lga => {
                const option = document.createElement('option');
                option.value = lga;
                option.textContent = lga;
                lgaSelect.appendChild(option);
            });
        }
    }
</script>