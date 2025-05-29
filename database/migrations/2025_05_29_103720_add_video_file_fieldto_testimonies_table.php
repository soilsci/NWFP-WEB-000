<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * - add image file with extension
     * - tag : home, recent, none: use booleans like is_focus and is_pinned
     * - recent is decided by the updated field
     */
    public function up(): void
    {
        Schema::table('testimonies', function (Blueprint $table) {
            $table->string('video_file')->comment('to add a  non YT video to testimonies')->default(NULL)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimonies', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'video_file',
                ]
                )
            );
        });
    }
};
