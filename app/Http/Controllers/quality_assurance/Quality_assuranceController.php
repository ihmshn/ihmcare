<?php

namespace App\Http\Controllers\quality_assurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\quality_assurance\Quality_assurance;

class Quality_assuranceController extends Controller
{
    public function dashboard()
    {
        return view('quality_assurance.dashboard');
    }
}
