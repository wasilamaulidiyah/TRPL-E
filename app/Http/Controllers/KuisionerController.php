<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuisioner;
use App\Models\JawabanKuisioner;

class KuisionerController extends Controller
{
  public function createStep1(Request $request){
    $value = new JawabanKuisioner();
    $data['keterangan'] = $value->keterangan;
    $data['kuisioner'] = $request->session()->get('kuisioner');
    return view('kuisioner.create-step1', $data);
  }
}
