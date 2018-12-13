<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_transaksi', function (Blueprint $table) {
            $table->foreign('id_tayang')->references('id_tayang')->on('table_tayang');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('table_pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
