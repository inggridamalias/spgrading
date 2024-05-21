<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table='hasil';
    protected $fillable=['id_bio','id_grade','cf'];
    public function biograding()
    {
        return $this->belongsTo(BioGrading::class,'id_bio','id');
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class,'id_grade','id'); // Hasil Grading
    }
}
