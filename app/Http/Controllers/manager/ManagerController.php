<?php

namespace App\Http\Controllers\Manager;
namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\manager\Manager;


class ManagerController extends Controller
{
    public function dashboard()
    {
        return view('manager.dashboard');
    }
}
