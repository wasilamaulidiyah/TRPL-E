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

  public function postCreateStep1(Request $request)
  {
    $request->validate([
      'P1'=>'required',
      'P2'=>'required',
      'P3'=>'required',
      'P4'=>'required',
      'P5'=>'required',
      'P6'=>'required',
      'P7'=>'required',
      'P8'=>'required',
      'P9'=>'required'
    ]);
    if (empty($request->session()->get('kuisioner')))
    {
      $kuisioner = new Kuisioner();
      $kuisioner->fill($request->all());
      $request->session()->put('kuisioner', $kuisioner);
    }
    else {
      $kuisioner = $request->session()->get('kuisioner');
      $kuisioner->fill($request->all());
      $request->session()->put('kuisioner', $kuisioner);
    }
      return redirect('kuisioner/create-step2');
    }

    public function createStep2(Request $request){
      $value = new JawabanKuisioner();
      $data['keterangan'] = $value->keterangan;
      $data['kuisioner'] = $request->session()->get('kuisioner');
      return view('kuisioner.create-step2', $data);
    }

    public function postCreateStep2(Request $request)
    {
      $request->validate([
        'Q2'=>'required',
        'Q3'=>'required',
        'Q4'=>'required',
        'Q5'=>'required',
        'Q6'=>'required',
        'Q7'=>'required',
        'Q8'=>'required',
      ]);
      $kuisioner = $request->session()->get('kuisioner');
      $kuisioner->fill($request->all());
      $save = $kuisioner->save();
      if($save)
      {
        $request->session()->put('kuisioner');
        return redirect('kuisioner/create-step1')->with(['message'=> 'Jawaban Berhasil Disimpan']);
      }
    }

}
