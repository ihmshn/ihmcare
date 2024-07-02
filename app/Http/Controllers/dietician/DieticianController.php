<?php
namespace App\Http\Controllers\Dietician;
namespace App\Http\Controllers\dietician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\dietician\Dietician;

class DieticianController extends Controller
{
    public function dashboard()
    {
        return view('dietician.dashboard');
    }
}
