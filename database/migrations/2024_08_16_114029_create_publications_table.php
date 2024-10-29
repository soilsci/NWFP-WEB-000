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
        # RecNum = id	-RefType	-Authors	-PubYear	-Title	-Journal	-Volume	-Issue	-Pages	-Abstract	Keywords	DOI	URL

        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('ref_type', length:50);
            $table->text('authors');
            $table->year('pub_year')->nullable($value = true);
            $table->text('title')->nullable($value = true);
            $table->text('journal')->nullable($value = true);
            $table->integer('volume')->nullable($value = true);
            $table->string('issue', length:20)->nullable($value = true);
            $table->string('pages', length:20)->nullable($value = true);
            $table->longText('abstract')->nullable($value = true);
            $table->longText('keywords')->nullable($value = true);
            $table->string('doi', length:50)->nullable($value = true);
            $table->string('url', length:255)->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
