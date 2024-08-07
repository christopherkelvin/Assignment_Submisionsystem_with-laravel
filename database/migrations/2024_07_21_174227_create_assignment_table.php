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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->on('user')->onDelete('cascade');
            $table->foreignId('Course_id')->on('course')->onDelete('cascade');
            $table->string('Heading');
            $table->string('Assignment');
            $table->string('SubmisionDate');
            $table->string('SubmisionTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment');
    }
};
