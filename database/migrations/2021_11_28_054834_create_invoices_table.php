<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('produk_id');
            $table->bigInteger('total');
            $table->date('tanggal_checkout');
            $table->boolean('bayar');
            $table->foreign('user_id', 'user_id_fk_1947072')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produk_id', 'produk_id_fk_1947072')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('invoices');
    }
}
