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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            $table->string("azienda");
            $table->string("tipologia_treno");
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->datetime("Orario_di_partenza");
            $table->datetime("Orario_di_arrivo");
            $table->string("codice_treno");
            $table->string("classe_servizio");
            $table->integer("numero_di_carrozze");
            $table->decimal("costo_biglietto", 8, 2); 
            $table->boolean("in_orario");
            $table->boolean("cancellato");



            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
