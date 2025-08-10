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
            // Hanya tambahkan foreign key jika belum ada
            if (!Schema::hasColumn('tasks', 'created_by')) {
                // Jika tidak ada, tambahkan kolom created_by
                $table->unsignedBigInteger('created_by');
                $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            }

            if (!Schema::hasColumn('tasks', 'supervisor_id')) {
                // Jika tidak ada, tambahkan kolom supervisor_id
                $table->unsignedBigInteger('supervisor_id')->nullable();
                $table->foreign('supervisor_id')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // Drop foreign keys dan kolom jika rollback
            $table->dropForeign(['created_by']);
            $table->dropForeign(['supervisor_id']);
            $table->dropColumn(['created_by', 'supervisor_id']);
        });
    }
};
