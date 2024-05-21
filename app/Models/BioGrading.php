<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioGrading extends Model
{
    use HasFactory;
    protected $table='bio_grading'; //Biodata User untuk Grading
    protected $fillable=['nama','no_hp','alamat','tgl'];
}
