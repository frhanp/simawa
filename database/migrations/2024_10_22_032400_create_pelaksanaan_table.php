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
        Schema::create('pelaksanaan', function (Blueprint $table) {
            $table->id();

            // Foreign key ke tabel tasks
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');

            // Entry Meeting
            $table->string('entry_meeting_photo')->nullable();
            $table->string('berita_acara_entry')->nullable();

            // Exit Meeting
            $table->string('exit_meeting_photo')->nullable();
            $table->string('berita_acara_exit')->nullable();

            // Status pengiriman
            $table->boolean('sent_to_inspektur')->default(false);

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksanaan');
    }
};
