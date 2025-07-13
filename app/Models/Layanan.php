<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    /** @use HasFactory<\Database\Factories\LayananFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama_layanan',
        'harga'
    ];

    public function registrasiInstalasis()
    {
        return $this->hasMany(RegistrasiInstalasi::class);
    }
}
