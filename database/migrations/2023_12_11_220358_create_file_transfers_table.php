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
        Schema::create('file_transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sent_by');
            $table->unsignedBigInteger('sent_to')->nullable();
            $table->unsignedBigInteger('sending_office_id');
            $table->unsignedBigInteger('receiving_office_id')->nullable();
            $table->unsignedBigInteger('file_id');
            $table->unsignedBigInteger('acknowledged_by')->nullable();
            $table->enum('status', ['pending', 'acknowledged']);
            $table->foreign('sent_by')->references('id')->on('users');
            $table->foreign('acknowledged_by')->references('id')->on('users');
            $table->foreign('sending_office_id')->references('id')->on('offices');
            $table->foreign('receiving_office_id')->references('id')->on('offices');
            $table->foreign('file_id')->references('id')->on('files')->cascadeOnDelete();
            $table->index(['id', 'file_id'], 'index');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_transfers');
    }
};
