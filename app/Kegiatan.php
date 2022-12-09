<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'nama_kegiatan',
        'link_kegiatan',
        'tingkat_daerah',
        'tanggal_mulai',
        'tanggal_selesai',
        'link_keterangan',
        'id_pengawas',
        'tanggal_masuk_laporan',
    ];
}
