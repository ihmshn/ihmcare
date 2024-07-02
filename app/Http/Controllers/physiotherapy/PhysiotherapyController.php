<?php

namespace App\Http\Controllers\physiotherapy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\physiotherapy\Physiotherapy;

class PhysiotherapyController extends Controller
{
    public function dashboard()
    {
        return view('physiotherapy.dashboard');
    }
}
