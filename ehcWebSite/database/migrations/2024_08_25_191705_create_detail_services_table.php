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
        Schema::create('detail_services', function (Blueprint $table) {
            $table->id();
            $table->string('TypeService')->nullable();
            $table->string('TitreService')->nullable();
            $table->text('DescriptionService')->nullable();
            $table->string('HeaderTitre')->nullable();
            $table->text('HeaderDescription')->nullable();
            $table->string('ImageHeader')->nullable();
            $table->string('Image')->nullable();
            $table->string('Titre1')->nullable();
            $table->text('Content1')->nullable();
            $table->string('Titre2')->nullable();
            $table->text('Content2')->nullable();
            $table->string('Titre3')->nullable();
            $table->text('Content3')->nullable();
            $table->string('Button')->nullable();
            $table->string('ButtonColor')->nullable();
            $table->string('LastImage')->nullable();
            $table->string('LastTitre')->nullable();
            $table->string('LastSousTitre')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_services');
    }
};
