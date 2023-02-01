<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKainMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kain_masuks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelanggan');
            $table->integer('id_jenis')->nullable();
            $table->integer('berat')->nullable();
            $table->bigInteger('harga1');
            $table->integer('id_helaian')->nullable();
            $table->integer('jumlah')->nullable();
            $table->bigInteger('harga2');
            $table->bigInteger('harga_total');
            $table->integer('pembayaran');
            $table->integer('status');
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
        Schema::dropIfExists('kain_masuks');
    }
}
