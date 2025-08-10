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
        Schema::table('tasks', function (Blueprint $table) {
            // Mengubah tipe kolom team_composition menjadi JSON
            $table->json('team_composition')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Mengembalikan tipe kolom team_composition ke tipe sebelumnya (misalnya text)
            $table->text('team_composition')->change();
        });
    }
};
