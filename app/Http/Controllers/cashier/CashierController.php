<?php
namespace App\Http\Controllers\Cashier;
namespace App\Http\Controllers\cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\cashier\Cashier;

class CashierController extends Controller
{
    public function dashboard()
    {
        return view('cashier.dashboard');
    }

    // public function manage_users()
    // {
    //     return view('cashier.manage_users');
    // }
}
