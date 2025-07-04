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
        Schema::create("movies_categories", function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")
                ->on("categories")->onDelete("cascade");
            $table->unsignedBigInteger("movie_id");
            $table->foreign("movie_id")->references("id")
                ->on("movies_main")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_categories');
    }
};
