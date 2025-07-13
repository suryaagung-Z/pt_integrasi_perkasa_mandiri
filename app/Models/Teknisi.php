<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    /** @use HasFactory<\Database\Factories\TeknisiFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jadwalInstalasis()
    {
        return $this->hasMany(JadwalInstalasi::class);
    }
}
