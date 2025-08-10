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
            $table->text('alasan_tolak')->nullable()->after('status'); // Tambahkan kolom 'alasan_tolak' setelah 'status'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelaporans', function (Blueprint $table) {
            $table->dropColumn('alasan_tolak'); // Hapus kolom 'alasan_tolak' saat rollback
        });
    }
};
