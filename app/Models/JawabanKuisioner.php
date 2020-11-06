<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kuisioner;
use App\Models\KuisionerController;

class JawabanKuisioner extends Model
{
    public $keterangan = [
      'Yes',
      'No',
    ];
}
