<?php

namespace App\Http\Controllers\ict;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ict\ICT;

class IctController extends Controller
{
    public function dashboard()
    {
        return view('ict.dashboard');
    }
}
