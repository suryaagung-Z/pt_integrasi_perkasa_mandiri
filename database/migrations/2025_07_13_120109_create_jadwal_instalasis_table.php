<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_instalasis', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('registrasi_instalasi_id');
            $table->foreignUuid('teknisi_id');
            $table->dateTime('waktu_kunjungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_instalasis');
    }
};
