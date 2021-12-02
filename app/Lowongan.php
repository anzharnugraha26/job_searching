<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = [
        'id_perusahaan', 'nama_perusahaan', 'posisi', 'alamat_perusahaan'
    ];
}
