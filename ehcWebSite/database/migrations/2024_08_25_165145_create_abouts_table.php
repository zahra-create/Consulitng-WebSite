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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('TitreHeader')->nullable();
            $table->string('SousTitreHeader')->nullable();
            $table->text('ContentHeader')->nullable();
            $table->string('Image1Header')->nullable();
            $table->string('Image2Header')->nullable();
            $table->string('Image')->nullable();
            $table->text('descriptionAbout')->nullable();
            $table->string('Logo')->nullable();
            $table->string('TitreHistoire')->nullable();
            $table->string('SousTitreHistoire')->nullable();
            $table->string('TitreTeam')->nullable();
            $table->string('SousTitreTeam')->nullable();
            $table->text('ContentTeam')->nullable();
            $table->string('ButtonTeam')->nullable();
            $table->string('TemoignageTitre')->nullable();
            $table->string('TemoignageSousTitre')->nullable();
            $table->string('TitrePartenaire')->nullable();
            $table->string('SousTitrePartenaire')->nullable();
            $table->text('TextePartenaire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
