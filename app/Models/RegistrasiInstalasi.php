<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiInstalasi extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrasiInstalasiFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'customer_id',
        'layanan_id',
        'status_id',
        'alamat_pemasangan',
        'no_hp'
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function jadwalInstalasi()
    {
        return $this->hasOne(JadwalInstalasi::class);
    }
}
