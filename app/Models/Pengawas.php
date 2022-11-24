<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    protected $fillable = [
        'nama_kegiatan',
        'link_kegiatan',
        'tingkat_daerah',
        'tanggal_mulai',
        'tanggal_selesai',
        'link_keterangan',
    ];
}
