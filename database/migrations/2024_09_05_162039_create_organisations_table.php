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
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('abbrev', length:10)->nullable($value = true);
            $table->string('website', length:255)->nullable($value = true);
            $table->string('ror', length:20)->nullable($value = true); // ror identifier
            // $table->string('ref_type', length:50);
            // $table->text('authors');
            // $table->year('pub_year')->nullable($value = true);
            // $table->integer('volume')->nullable($value = true);
            // $table->longText('abstract')->nullable($value = true);
            // $table->string('url', length:255)->nullable($value = true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisations');
    }
};
