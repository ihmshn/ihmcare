<?php

namespace App\Http\Controllers\human_resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\human_resource\HR;

class HRController extends Controller
{
    public function dashboard()
    {
        return view('human_resource.dashboard');
    }
}
