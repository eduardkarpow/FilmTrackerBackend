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
        Schema::dropIfExists('movies_main');
        Schema::create("movies_main", function (Blueprint $table){
            $table->id();
            $table->string("title");
            $table->string("short_description");
            $table->integer("year");
            $table->string("restriction");
            $table->string("lasts");
            $table->float("imdb_rating")->nullable();
            $table->float("kinopoisk_rating")->nullable();
            $table->longText("long_description");
            $table->longText("image_url");
            $table->unsignedBigInteger("director_id");
            $table->foreign("director_id")->references("id")->on("directors")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_main');
    }
};
