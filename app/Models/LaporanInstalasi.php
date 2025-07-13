<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanInstalasi extends Model
{
    /** @use HasFactory<\Database\Factories\LaporanInstalasiFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'jadwal_id',
        'catatan',
        'foto_bukti',
    ];

    public function jadwalInstalasi()
    {
        return $this->belongsTo(JadwalInstalasi::class);
    }
}
