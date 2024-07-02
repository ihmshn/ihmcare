<?php

namespace App\Http\Controllers\Counseling;
namespace App\Http\Controllers\counseling;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\counseling\Counseling;

class CounselingController extends Controller
{
    public function dashboard()
    {
        return view('counseling.dashboard');
    }
}
