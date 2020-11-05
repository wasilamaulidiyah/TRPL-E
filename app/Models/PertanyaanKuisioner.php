<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PertanyaanKuisioner extends Model
{
    public $keterangan = [
      'Sangat Baik',
      'Baik',
      'Cukup Baik',
      'Cukup',
      'Tidak Baik'
    ];
}
