<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table='grade';
    protected $fillable=['kode_grade','nama_grade', 'harga']; //Tab Grade (ID,Nama,Harga)
}
