<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducentProduktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producent_produkt', function (Blueprint $table) {
            $table->id();
         //   $table->unsignedBigInteger('id_kategoria')->unsigned()->nullable();
            $table->unsignedBigInteger('producent_id')->unsigned()->nullable();
            $table->unsignedBigInteger('produkt_id')->unsigned()->nullable();
            $table->timestamps();

       //     $table->foreign('id_kategoria')->references('id')->on('kategorias')->onDelete('cascade');
            $table->foreign('producent_id')->references('id')->on('producents')->onDelete('cascade');
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
        Schema::dropIfExists('producent_produkt');
    }
}
