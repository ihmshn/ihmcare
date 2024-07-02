<?php

namespace App\Http\Controllers\pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pharmacy\Pharmacy;

class PharmacyController extends Controller
{
    public function dashboard()
    {
        return view('pharmacy.dashboard');
    }
}
