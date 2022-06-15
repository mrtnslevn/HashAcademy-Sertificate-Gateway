<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi'
    ];


    use HasFactory;


    public function getCreatedAtAttribute($value){
        return now()->parse($value)->timezone(config('app.timezone'))->format('d F Y , H:i:s');
    }

    public function getUpdatedAtAttribute($value){
        return now()->parse($value)->timezone(config('app.timezone'))->format('d F Y , H:i:s');
    }

}
