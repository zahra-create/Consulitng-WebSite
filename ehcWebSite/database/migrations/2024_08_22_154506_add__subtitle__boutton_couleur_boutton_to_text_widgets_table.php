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
        Schema::table('text_widgets', function (Blueprint $table) {
            $table->string('Subtitle',2048)->nullable();
            $table->string('Boutton',2048)->nullable();
            $table->string('couleurBoutton')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('text_widgets', function (Blueprint $table) {
            $table->dropColumn(['Subtitle', 'Boutton','couleurBoutton']);
        });
    }
};
