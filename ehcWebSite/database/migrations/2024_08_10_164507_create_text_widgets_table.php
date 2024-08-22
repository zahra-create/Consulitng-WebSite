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
        Schema::create('text_widgets', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('image',2048)->nullable();
            $table->string('title',2048)->nullable();
            $table->string('Subtitle',2048)->nullable();
            $table->longText('content')->nullable();
            $table->string('Boutton',2048)->nullable();
            $table->string('couleurBoutton')->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('text_widgets');

    }
};
