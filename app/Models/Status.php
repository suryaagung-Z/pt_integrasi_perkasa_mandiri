<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /** @use HasFactory<\Database\Factories\StatusFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'nama_status'
    ];

    public function registrasiInstalasis()
    {
        return $this->hasMany(RegistrasiInstalasi::class);
    }
}
