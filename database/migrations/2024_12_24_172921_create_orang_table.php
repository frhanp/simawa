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
        Schema::create('orang', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama orang
            $table->string('jabatan'); // Jabatan orang (Penanggung Jawab, Ketua Tim, dll.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang');
    }
};
