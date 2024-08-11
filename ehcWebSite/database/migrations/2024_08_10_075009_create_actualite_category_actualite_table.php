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
        Schema::create('actualite_category_actualite', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('category_actualite_id')->references('id')->on('category_actualites')->onDelete('cascade');
            $table->ForeignId('actualite_id')->references('id')->on('actualite')->onDelete('cascade');
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
        Schema::dropIfExists('actualite_category_actualite');
    }
};
