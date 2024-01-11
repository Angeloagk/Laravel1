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
        Schema::create('voetbalcompetities', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->date('start_datum');	
            $table->date('eind_datum')->nullable();
            $table->string('locatie');
            $table->integer('aantal_teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competities');
    }
};
