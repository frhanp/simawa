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
        Schema::table('pelaporans', function (Blueprint $table) {
            // [DIUBAH] Lengkapi daftar enum
            $table->enum('status', [
                'Menunggu Inspektur',
                'Acc',
                'Ditolak',
                'Ditolak Inspektur',
                'Dikonfirmasi Inspektur', // baru
                'Dijadwalkan Ulang',      // baru
            ])->default('Menunggu Inspektur')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelaporans', function (Blueprint $table) {
            // [ROLLBACK] Kembali ke enum semula
            $table->enum('status', [
                'Menunggu Inspektur','Acc','Ditolak','Ditolak Inspektur'
            ])->default('Menunggu Inspektur')->change();
        });
    }
};
