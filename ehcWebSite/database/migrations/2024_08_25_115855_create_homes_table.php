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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('TitreHeader')->nullable();
            $table->text('ContentHeader')->nullable();
            $table->string('ImageHeader')->nullable();
            $table->string('ButtonHeader')->nullable();
            $table->string('ColorButtonHeader')->nullable();
            $table->string('TitreAbout')->nullable();
            $table->string('ImageHeroAbout')->nullable();
            $table->text('Paragraph1About')->nullable();
            $table->text('Paragraph2About')->nullable();
            $table->string('ImageAbout')->nullable();
            $table->string('ButtonAbout')->nullable();
            $table->string('ColorButtonAbout')->nullable();
            $table->string('TitreWHYEHC')->nullable();
            $table->text('IntroWHYEHC')->nullable();

            $table->string('TitreBU')->nullable();
            $table->string('ImageBU')->nullable();
            $table->string('lienVideo')->nullable();
            $table->string('buttonBU')->nullable();
            $table->string('ColorbuttonBU')->nullable();
            $table->string('ImageChiffres')->nullable();
            $table->string('TitreChiffres')->nullable();
            $table->text('TexteChiffres')->nullable();
            $table->string('ButtonChiffres')->nullable();
            $table->string('ColorChiffres')->nullable();
            $table->string('TitreActualites')->nullable();
            $table->string('ButtonActualites')->nullable();
            $table->string('TitrePartenaire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
