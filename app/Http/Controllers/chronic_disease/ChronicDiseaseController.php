<?php
namespace App\Http\Controllers\ChronicDisease;
namespace App\Http\Controllers\chronic_disease;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\chronic_disease\ChronicDisease;

class ChronicDiseaseController extends Controller
{
    public function dashboard()
    {
        return view('chronic_disease.dashboard');
    }
}
