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
        Schema::create('penemuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lhp_id')->constrained('lhp')->onDelete('cascade');
            
            $table->string('judul_penemuan');
            $table->text('kondisi');
            $table->text('kriteria');
            
            // Penyebab (Struktur baru: Dropdown + Deskripsi)
            $table->string('penyebab_kategori'); // Menyimpan: Manusia, Uang, Material, Mesin, Metode
            $table->text('penyebab_deskripsi');
            
            // Akibat (Struktur baru: Dropdown + Deskripsi)
            $table->string('akibat_kategori'); // Menyimpan: Kerugian Keuangan Negara, Administratif
            $table->text('akibat_deskripsi');
            
            // Rekomendasi (Struktur baru: Dropdown + Deskripsi)
            $table->string('rekomendasi_kategori'); // Menyimpan: Pengembalian Keuangan Negara, Sanksi/Teguran
            $table->text('rekomendasi_deskripsi');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penemuans');
    }
};
