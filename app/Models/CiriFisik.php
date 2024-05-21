<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiriFisik extends Model
{
    use HasFactory;
    protected $table='ciri_fisik';
    protected $fillable=['nama_fisik']; //Nilai Mutu Daun Tembakau
}

