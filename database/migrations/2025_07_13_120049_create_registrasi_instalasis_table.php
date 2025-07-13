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
        Schema::create('registrasi_instalasis', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('customer_id');
            $table->foreignUuid('layanan_id');
            $table->foreignUuid('status_id');
            $table->string('alamat_pemasangan');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi_instalasis');
    }
};
