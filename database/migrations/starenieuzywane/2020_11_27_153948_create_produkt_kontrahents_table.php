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
            $table->id();
            $table->unsignedBigInteger('nip')->unsigned()->nullable();
            $table->foreign('nip')->references('id')->on('kontrahents')->onDelete('cascade');
            $table->unsignedBigInteger('id_produkt')->unsigned()->nullable();
            $table->foreign('id_produkt')->references('id')->on('produkts')->onDelete('cascade');
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
