<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'umur',
        'tanggal_lahir',
        'gender',
        'no_hp',
        'tahun_lulus_smp',
        'nama_orangtua',
        'no_hp_orangtua',
        'daerah_asal',
        'jenjang_pendidikan_terakhir',
        'tahun_masuk',
        'asal_sekolah',
        'negara_asal_sekolah',
        'kota_asal_sekolah',
        'ijazah_smp'
    ];
} 