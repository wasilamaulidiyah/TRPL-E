<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\KuisionerController;
use App\Models\JawabanKuisioner;

class Kuisioner extends Model
{
    protected $table = 'kuisioner';
    protected $fillable = ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8', 'P9', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6','Q7', 'Q8'];
}
