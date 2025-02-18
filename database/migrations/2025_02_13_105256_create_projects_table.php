<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * **Projects** model:  see doc
     *  - id
    * - title > name
    * - Goal > long text
    * - Data: this looks like it could be a list of data - DRY > make model Data -m
    * - Themes: this too looks like a many to many - DRY > make model Theme -m
    * - Description: this is a proper text field
    * - additional_data: text field
    * - tags : this is a many to many area tag (crops, lifestock, biodiversity) that will be the tag, will pick up the right images - many to many
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('The name of the project');
            $table->text('goal')->comment('The goal of the project');
            $table->text('description')->comment('The description of the project');
            $table->text('additional_data')->comment('If there are additional information')->nullable();
            $table->boolean('is_available')->comment('For future Projects')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
