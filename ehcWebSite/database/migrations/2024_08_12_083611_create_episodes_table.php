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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();         
            $table->foreignId('podcast_id')->nullable()->constrained('podcasts')->onDelete('cascade');
            $table->string('titre',2048)->nullable();
            $table->string('slug',2048);
            $table->string('cover')->nullable();
            $table->longText('description')->nullable();
            $table->string('audio');
            $table->boolean('active');
            $table->datetime('date_publication')->nullable();
            $table->string('proprietaire')->nullable();
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
        Schema::dropIfExists('episodes');
    }
};
