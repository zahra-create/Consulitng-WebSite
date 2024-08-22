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
        Schema::create('client_comments', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('poste')->nullable(); 
            $table->string('entreprise')->nullable();
            $table->text('commentaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_comments');
    }
};
