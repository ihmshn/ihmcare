<?php

namespace App\Http\Controllers\lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\lab\Lab;

class LabController extends Controller
{
    public function dashboard()
    {
        return view('lab.dashboard');
    }
}
