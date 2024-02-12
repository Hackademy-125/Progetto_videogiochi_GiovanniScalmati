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
        Schema::table('videogames', function (Blueprint $table) {
            //creo la colonna pe ril vincolo di INTEGRITà REFERENZIALE
            $table->unsignedBigInteger("user_id")->afet('author')->nullable();
            // Definire vingolo di integrità
            $table->foreign("user_id")->references("id")->on('users');
            // $table->foreignId('user_id')->nullable()->afet('author')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videogames', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn("user_id"); 
        });
    }
};

