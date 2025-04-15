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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->comment('Link to the relevant STUDENT as an author');
            $table->foreignId('project_id')->comment('Project referred to');
            $table->boolean('is_visible')->default(FALSE)->comment('to signify that the testimony is visible on the web site as opposed to a draft form');
            $table->string('title', 255)->comment('Short title for the testimony');
            $table->mediumText('short')->comment('Less than 50 words testimony');
            $table->text('long')->comment('Ad lib testimony')->nullable();
            $table->mediumText('URL')->comment('add full URL to one additional resource')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};
