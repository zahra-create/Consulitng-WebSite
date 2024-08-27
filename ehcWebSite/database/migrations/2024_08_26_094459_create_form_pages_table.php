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
        Schema::create('form_pages', function (Blueprint $table) {
            $table->id();
            $table->string('Page');
            $table->string('Titre')->nullable();
            $table->string('SousTitre')->nullable();
            $table->string('Image')->nullable();
            $table->string('TitreIntro')->nullable();
            $table->string('SousTitreIntro')->nullable();
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
        Schema::dropIfExists('form_pages');
    }
};
