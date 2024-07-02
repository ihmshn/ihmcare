<?php

namespace App\Http\Controllers\radiology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\radiology\Radiology;

class RadiologyController extends Controller
{
    public function dashboard()
    {
        return view('radiology.dashboard');
    }
}
