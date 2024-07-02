<?php

namespace App\Http\Controllers\internal_audit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\internal_audit\InterAudit;

class InternalauditController extends Controller
{
    public function dashboard()
    {
        return view('internal_audit.dashboard');
    }
}
