<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
## COLONNE-CAMPI DELLA TABELLA TRAINS
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
*/

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 15);
            $table->string('Departure_station', 50);
            $table->string('Arrival_station', 50);
            $table->time('Departure_time');
            $table->time('Arrival_time');
            $table->char('Train_code');
            $table->smallInteger('Carriage');
            $table->boolean('On_time');
            $table->boolean('Deleted');
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
