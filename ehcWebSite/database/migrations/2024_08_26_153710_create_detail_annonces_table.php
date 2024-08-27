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
        Schema::create('detail_annonces', function (Blueprint $table) {
            $table->id();
            $table->string('TypeAnnonce')->nullable();
            $table->string('Titre')->nullable();
            $table->string('SousTitre')->nullable(); 
            $table->string('Titre1')->nullable(); 
            $table->string('Titre2')->nullable(); 
            $table->text('Titredescription1')->nullable(); 
            $table->text('Titredescription2')->nullable();
            $table->string('TitreForm')->nullable();
            $table->string('Button')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_annonces');
    }
};
