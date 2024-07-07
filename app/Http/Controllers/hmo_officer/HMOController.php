<?php

namespace App\Http\Controllers\hmo_officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\hmo_officer\HMO;

class HMOController extends Controller
{
    public function dashboard()
    {
        return view('hmo_officer.dashboard');
    }






}
