<?php

namespace App\Models\mortuary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mortuary extends Model
{
    //use HasFactory;

    protected $table = 'mortuary_bill';
    //protected $table = 'corpsedeposit';

    // Add your other model methods here

    public static function fetchTableRecordOnlyDailyInsert($table, $column)
    {
        return DB::table($table)->where($column, 'update_today')->get();
    }

    public static function updateChargeDate($chargeDate, $corpseID)
    {
        DB::table('mortuary_bill')
            ->where('corpse_id', $corpseID)
            ->update(['charge_date' => $chargeDate]);
    }

    public static function checkIfScriptRanToday($date)
    {
        return DB::table('mortuary_bill')->where('charge_date', $date)->count();
    }

    public static function updateDailyCharge($chargeDate, $dailyCharge, $corpseID)
    {
        DB::table('mortuary_bill')
            ->where('corpse_id', $corpseID)
            ->increment('total_amount', $dailyCharge, ['charge_date' => $chargeDate]);
    }


   

    public static function getAllDepositsCount()
    {
        return DB::table('corpsedeposit')->count();
    }






    public static function fetchTableRecordOnly($table, $orderBy)
    {
        return DB::table($table)->orderBy($orderBy, 'desc')->get();
    }

    public static function targetedInfo($table, $field, $data)
    {
        return DB::table($table)->where($field, $data)->first();
    }



}
