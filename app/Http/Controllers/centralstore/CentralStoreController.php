<?php

namespace App\Http\Controllers\Centralstore;
namespace App\Http\Controllers\centralstore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\centralstore\Centralstore;

class CentralStoreController extends Controller
{
    public function dashboard()
    {
        return view('centralstore.dashboard');
    }
}
