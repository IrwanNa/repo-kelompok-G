<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaProduk',
        'jumlahKeluar',
        'jenis'
    ];
}
