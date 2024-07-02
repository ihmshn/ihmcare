<?php

namespace App\Http\Controllers\Frontdesk;


namespace App\Http\Controllers\frontdesk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\frontdesk\Frontdesk;


class FrontdeskController extends Controller
{
    public function dashboard()
    {
        return view('frontdesk.dashboard');
    }

    public function new_patient_reg()
    {
        return view('frontdesk.new_patient_reg');
    }
}
