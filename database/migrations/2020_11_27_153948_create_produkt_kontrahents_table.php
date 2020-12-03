<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduktKontrahentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkt_kontrahents', function (Blueprint $table) {
            
            $table->unsignedBigInteger('produkt_kontrahent')->unsigned()->nullable();
            $table->foreign('produkt_kontrahent')->references('id')->on('kontrahents')->onDelete('cascade');
            $table->unsignedBigInteger('id_produkt')->unsigned()->nullable();
            $table->foreign('id_produkt')->references('id')->on('produkts')->onDelete('cascade');
            $table->float('cena');
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
        Schema::dropIfExists('produkt_kontrahents');
    }
}
