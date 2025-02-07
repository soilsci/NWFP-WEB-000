<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * - add image file with extension
     * - tag : home, recent, none: use booleans like isOnHomePage and isPinned
     * - recent is decided by the updated field
     */
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->boolean('isOnHomePage')->comment('To add a link to that page on the Home page')->default(false);
            $table->boolean('isPinned')->comment('To Pin the page on top of a list of pages')->default(false);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'isOnHomePage',
                'isPinned',
                ]
                )
            );
        });
    }
};
