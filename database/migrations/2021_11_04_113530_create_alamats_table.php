<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_provinsi')->unsigned()->index('id_user');
            $table->bigInteger('id_kota')->unsigned()->index('id_kota');
            $table->string('alamat_lengkap');

            $table->foreign('id_provinsi')->references('id')->on('provinsis')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('id_kota')->references('id')->on('kotas')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamats');
    }
}
