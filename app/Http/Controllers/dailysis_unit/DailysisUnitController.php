<?php

namespace App\Http\Controllers\dailysis_unit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dailysis_unit\Dailysisunit;

class DailysisUnitController extends Controller
{
    public function dashboard()
    {
        return view('dailysis_unit.dashboard');
    }
}
