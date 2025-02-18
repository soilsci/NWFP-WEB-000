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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('')->nullable(true);
            $table->string('last_name')->comment('')->nullable(false);
            $table->foreignID('organisation_id')->references('id')->on('organisations');
            $table->index('organisation_id');
            $table->text('course_name')->comment('Describe course and level')->default(' ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
