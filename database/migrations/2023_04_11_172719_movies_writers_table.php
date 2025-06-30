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
        Schema::create("movies_writers", function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("writer_id");
            $table->foreign("writer_id")->references("id")
                ->on("writers")->onDelete("cascade");
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
