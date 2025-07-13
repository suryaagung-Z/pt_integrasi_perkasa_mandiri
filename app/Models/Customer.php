<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'nama_customer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registrasiInstalasis()
    {
        return $this->hasMany(RegistrasiInstalasi::class);
    }
}
