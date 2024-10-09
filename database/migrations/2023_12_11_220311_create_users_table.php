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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('pf_number')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('rank')->nullable();
            $table->string('grade_level')->nullable();
            $table->unsignedBigInteger('grade_level_id')->nullable();
            $table->unsignedBigInteger('step_id')->nullable();
            $table->unsignedBigInteger('office_id');
            $table->string('role')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('date_of_first_appointment')->nullable();
            $table->string('date_of_present_appointment')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('cj')->nullable();
            $table->string('psn')->nullable();
            $table->string('cno')->nullable();
            $table->string('remark')->nullable();
            $table->foreign('office_id')->references('id')->on('offices')->cascadeOnDelete();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['id', 'pf_number', 'office_id'], 'index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
