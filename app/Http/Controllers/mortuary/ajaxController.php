<?php

namespace App\Http\Controllers\mortuary;
use App\Http\Controllers\mortuary\MortuaryController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mortuary\Mortuary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ajaxController extends Controller
{



    public function if_Request_No_Exist($dataChecked)
    { 
        $check = DB::table('staff_request_table')->where('request_no', '=', $dataChecked)->where('status','=', 'Approved')->first();
        
        if ($check === null) {
            echo json_encode("Invalid Reference ID!!!");
        } else {
            echo json_encode("Reference ID Validated!!!");
      
        }
    }

    public function Fetch_StaffLoan_balance($stafID)
    {

      
        $SpecifiedData1 = DB::table("chart_of_account")->select('id','actual_balance')
        ->WHERE('account_id', '=', $stafID)->first();
        $GetActual_Loan_B = $SpecifiedData1->actual_balance;

     
        
        echo json_encode($GetActual_Loan_B);
        exit;
    }
    






    
}
