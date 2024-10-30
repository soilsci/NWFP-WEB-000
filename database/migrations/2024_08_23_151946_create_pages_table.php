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
        Schema::create('pages', function (Blueprint $table) {
            $table->comment('List the static pages in the web site');
            $table->id();
            $table->string('name')->comment('the filename excluding .blad.php');
            $table->string('title')->comment('Title of the page');
            $table->longText('description')->comment('a short descripton of the content');
            $table->string('status')->comment('Draft, Reviewing, Published');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
