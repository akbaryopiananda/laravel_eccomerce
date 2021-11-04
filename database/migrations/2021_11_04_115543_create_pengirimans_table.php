<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_invoice')->index('id_invoice')->unsigned();
            $table->date('tanggal_kirim');
            $table->date('estimasi_pengiriman');
            $table->bigInteger('id_status')->index('id_status')->unsigned();

            $table->foreign('id_invoice')->references('id')->on('invoices')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_status')->references('id')->on('status')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengirimans');
    }
}
