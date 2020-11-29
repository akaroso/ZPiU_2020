<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriaProduktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoria_produkt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategoria_id')->unsigned()->nullable();
          //  $table->unsignedBigInteger('id_producent')->unsigned()->nullable();
            $table->unsignedBigInteger('produkt_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('kategoria_id')->references('id')->on('kategorias')->onDelete('cascade');
          //  $table->foreign('id_producent')->references('id')->on('producents')->onDelete('cascade');
            $table->foreign('produkt_id')->references('id')->on('produkts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoria_produkt');
    }
}
