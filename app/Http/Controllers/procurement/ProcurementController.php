<?php

namespace App\Http\Controllers\procurement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\procurement\Procurement;

class ProcurementController extends Controller
{
    public function dashboard()
    {
        return view('procurement.dashboard');
    }
}
