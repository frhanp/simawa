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
            $table->date('tanggal_expose')->nullable()->after('expose_pelaporan');
            $table->enum('status', ['Dalam Proses', 'Menunggu Inspektur', 'Selesai'])->default('Dalam Proses')->after('tanggal_expose');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelaporans', function (Blueprint $table) {
            $table->dropColumn(['tanggal_expose', 'status']);
        });
    }
};
