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
        Schema::create('publicites', function (Blueprint $table) {
            $table->id();
            $table->string('emplacement');
            $table->string('Titre')->nullable();
            $table->string('Image')->nullable();
            $table->string('Type');
            $table->string('link');
            $table->longText('description')->nullable();
            $table->boolean('status');
            $table->string('SousTitre')->nullable();
            $table->string('Boutton')->nullable();
            $table->string('button_color')->nullable();
            $table->string('background')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicites');
    }
};
