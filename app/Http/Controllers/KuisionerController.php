<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuisioner;
use App\Models\JawabanKuisioner;

class KuisionerController extends Controller
{
  public function createStep1(Request $request){
    $value = new JawabanKuisioner();
    return view('kuisioner.create-step1');
  }
}
