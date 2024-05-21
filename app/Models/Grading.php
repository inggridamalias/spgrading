<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grading extends Model
{
    use HasFactory;
    protected $table='grading';
    protected $fillable=['id_bio','id_detail_fisik','nilai_cf'];
    public function detail_fisik()
    {
        return $this->belongsTo(DetailCiriFisik::class,'id_detail_fisik','id')->orderBy('id_grade', 'desc');
    }
    public function bio()
    {
        return $this->belongsTo(BioGrading::class,'id_bio','id'); //Laporan Grading
    }
}
