<?php

namespace App\Http\Controllers\Doctor;
namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\doctor\Doctor;

class DoctorController extends Controller
{
    public function dashboard()
    {
        return view('doctor.dashboard');
    }
}
