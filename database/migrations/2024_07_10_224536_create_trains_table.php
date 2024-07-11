<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 150);
            $table->string('stazione_arrivo', 150);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('codice_treno', 20);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario')->default(false);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();


        });
    }
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

// Ogni treno dovrà avere:
// Azienda                 varchar(50)
// Stazione di partenza    varchar(150)
// Stazione di arrivo      varchar(150)
// Orario di partenza      datetime
// Orario di arrivo        datetime
// Codice Treno            varchar(20)
// Numero Carrozze         tinyint(2)
// In orario               tinyint(1)
// Cancellato              tinyint(1)   
