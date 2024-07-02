<?php

namespace App\Http\Controllers\occupational_health;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\occupational_health\Occupational_health;

class Occupational_healthController extends Controller
{
    public function dashboard()
    {
        return view('occupational_health.dashboard');
    }
}
