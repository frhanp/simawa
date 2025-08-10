<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRejectionReasonToTasksTable extends Migration
{
    /**
     * Run the migrations.
     * Menambahkan kolom 'rejection_reason' untuk menyimpan alasan penolakan tugas.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('rejection_reason')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     * Menghapus kolom 'rejection_reason'.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('rejection_reason');
        });
    }
}
