<?php

namespace App\Http\Controllers\legal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\legal\Legal;


class LegalController extends Controller
{
    public function dashboard()
    {
        return view('legal.dashboard');
    }
}
