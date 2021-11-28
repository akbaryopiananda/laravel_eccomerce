<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->integer('stok');
            $table->string('gambar');
            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id', 'kategori_id_fk_1947072')->references('id')->on('categoris')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
