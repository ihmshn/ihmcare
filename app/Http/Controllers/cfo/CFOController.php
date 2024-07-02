<?php

namespace App\Http\Controllers\cfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cfo\CFO;

class CFOController extends Controller
{
    public function dashboard()
    {
        return view('cfo.dashboard');
    }
}
