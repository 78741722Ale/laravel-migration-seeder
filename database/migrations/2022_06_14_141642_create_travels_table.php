<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('address', 40);
            $table->string('city', 40);
            $table->tinyInteger('civic')->unsigned();
            $table->string('begin_at', 20);
            $table->string('end_at', 20);
            $table->decimal('price', 6, 2);
            $table->text('note');
            $table->timestamps();
        });
    }

/* Cosa può andare nella tabella :
Cliente : -> per ora faccio solo la migration dell'albergo
Nome => String (40)
Cognome => String (40)
Data di nascita => date(12)

Albergo
Nome albergo => String (40)
Indirizzo => String (40)
Città => String (40)
Civico => tinyint
Inizio Soggiorno => date(12)
Fine Soggiorno => date(12)
Prezzo soggiorno => decimal(6,2)
Eventuali note => text
*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
