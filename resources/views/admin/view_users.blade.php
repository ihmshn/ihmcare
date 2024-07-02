@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp
<div class="col-xl-12 col-md-12">
    <div class="ms-panel-header ms-panel-custome">
        <h6>VIEW all users</h6>
        <a href="manage_users" class="ms-text-primary">Back</a>
    </div>
    <div class="ms-panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped thead-primary w-100">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>PHOTO</th>
                        <th>FULLNAME</th>
                        <th>EMPLOYEE ID</th>
                        <th>USERNAME</th>
                        <th>ROLE</th>
                        <th>DEPARTMENT</th>
                        <th>TYPE</th>
                        <th>UNIT</th>
                        <th>BRANCH</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                    @php
                        $employee = Admin::targetedInfo('employees', 'employ_id', $user->staff_id);
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if (!empty($employee->photo))
                            <a href="{{ asset('human_resource/staffDocument/' . $employee->photo) }}" target="_blank">
                                <img src="{{ asset('human_resource/staffDocument/' . $employee->photo) }}" alt="Photo" style="max-width: 50px; max-height: 50px;">
                            </a>
                            @else
                            No Photo
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->staff_id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->department_type }}</td>
                        <td>{{ $user->unit }}</td>
                        <td>{{ $user->branch }}</td>
                        <td>
                            <b>
                                @if ($user->status == "Active")
                                <span class="badge badge-success p-2">{{ $user->status }}</span>
                                @else
                                <span class="badge badge-warning p-2">{{ $user->status }}</span>
                                @endif
                            </b>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
