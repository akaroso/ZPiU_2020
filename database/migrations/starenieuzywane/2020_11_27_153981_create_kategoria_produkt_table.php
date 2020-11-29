<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriaProduktsTable extends Migration
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
            $table->unsignedBigInteger('id_kategoria')->unsigned()->nullable();
          //  $table->unsignedBigInteger('id_producent')->unsigned()->nullable();
            $table->unsignedBigInteger('id_produkt')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_kategoria')->references('id')->on('kategorias')->onDelete('cascade');
          //  $table->foreign('id_producent')->references('id')->on('producents')->onDelete('cascade');
            $table->foreign('id_produkt')->references('id')->on('produkts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoria_producents');
    }
}
