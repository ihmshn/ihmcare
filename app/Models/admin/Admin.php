<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;

    public static function fetchTableOnly($table)
    {
        return DB::table($table)->get()->toArray();
    }

    public static function targetedInfo($table, $field, $data)
    {
        return DB::table($table)->where($field, $data)->first();
    }
}
