<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCiriFisik extends Model
{
    use HasFactory; //Detail Nilai Mutu, Nama Keadaan, Nilai CF
    protected $table='detail_ciri_fisik';
    protected $fillable=['id_grade','id_ciri_fisik','kode_detail_fisik','nama_detail_fisik','md','mb'];
    public function grade()
    {
        return $this->belongsTo(Grade::class,'id_grade','id');
    }
    public function ciri()
    {
        return $this->belongsTo(CiriFisik::class,'id_ciri_fisik','id');
    }
}
