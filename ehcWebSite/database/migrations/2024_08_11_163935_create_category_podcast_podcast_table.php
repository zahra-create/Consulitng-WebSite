<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_podcast_podcast', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('category_podcast_id')->constrained('category_podcasts')->onDelete('cascade');
            $table->ForeignId('podcast_id')->constrained('podcasts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_podcast_podcast');
    }
};
