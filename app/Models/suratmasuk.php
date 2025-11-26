<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class suratmasuk extends Model
{
    protected $table = 'suratmasuk';
    protected $fillable = [
        'nomor_surat',
        'judul_surat',
        'instansi_pengirim',
        'penerima_surat',
        'tanggal_mengirim',
        'kategori',
        'nama_pengirim',
        'no_telepon',
        'alasan',
    ];
}
