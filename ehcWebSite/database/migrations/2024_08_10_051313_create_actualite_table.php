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
        Schema::create('actualite', function (Blueprint $table) {
            $table->id();
            $table->string('titre',2048);
            $table->string('slug',2048);
            $table->string('image')->nullable();
            $table->longText('corps');
            $table->boolean('active');
            $table->datetime('date_publication');
            $table->string('Auteur');
            $table->boolean('afficher_sur_accueil')->default(false);
            $table->boolean('afficher_en_banniere')->default(false);
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
        Schema::dropIfExists('actualite');
    }
};
