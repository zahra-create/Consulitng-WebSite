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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('entreprise');
            $table->string('profil');
            $table->text('description');
            $table->string('location');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('lien_postuler')->nullable();
            $table->string('image_offre_path')->nullable();
            $table->string('image_details_path')->nullable();
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
        Schema::dropIfExists('stages');
    }
};
