<?php
namespace App\Http\Controllers\Billing;
namespace App\Http\Controllers\billing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Billing;

class BillingController extends Controller
{
    public function dashboard()
    {
        return view('billing.dashboard');
    }

    public function manage_users()
    {
        return view('billing.manage_users');
    }

}
