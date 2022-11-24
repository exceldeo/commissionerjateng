<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'nomor_lisensi',
        'link_lisensi',
        'no_telp',
        'pengkab_pengkot',
        'lisensi_pengawas',
        'masa_berlaku_lisensi',
        'foto'
    ];
}
