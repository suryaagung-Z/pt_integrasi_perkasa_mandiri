<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalInstalasi extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalInstalasiFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'registrasi_instalasi_id',
        'teknisi_id',
        'waktu_kunjungan',
    ];

    public function registrasiInstalasi()
    {
        return $this->belongsTo(RegistrasiInstalasi::class);
    }

    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class);
    }

    public function laporanInstalasi()
    {
        return $this->hasOne(LaporanInstalasi::class);
    }
}
