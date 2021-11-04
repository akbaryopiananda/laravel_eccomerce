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
            $table->id();
            $table->bigInteger('id_user')->index('id_user')->unsigned();
            $table->integer('total_tagihan');
            $table->bigInteger('id_rekening')->index('id_rekening')->unsigned();
            $table->date('tanggal_checkout');
            $table->string('bukti_pembayaran');
            $table->bigInteger('id_inbox')->index('id_inbox')->unsigned();

            $table->foreign('id_rekening')->references('id')->on('rekenings')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_inbox')->references('id')->on('inboxs')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
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
