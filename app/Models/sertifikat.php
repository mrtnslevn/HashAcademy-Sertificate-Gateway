<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Peserta',
        'Nama_Kegiatan',
        'kode_unik',
        'sertifikat_path'
    ];



    public function getCreatedAtAttribute($value){
        return now()->parse($value)->format('d F Y , H:i:s');
    }


}
