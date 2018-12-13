<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_tayang')->unsigned();
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('jumlah_tiket');
            $table->date('tgl_transaksi');
            $table->integer('studio');
            $table->char('kursi');
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
        Schema::dropIfExists('table_transaksi');
    }
}
