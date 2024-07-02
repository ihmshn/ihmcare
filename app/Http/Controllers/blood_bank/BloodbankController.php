<?php

namespace App\Http\Controllers\blood_bank;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blood_bank\Bloodbank;

class BloodbankController extends Controller
{
    public function dashboard()
    {
        return view('blood_bank.dashboard');
    }
}
