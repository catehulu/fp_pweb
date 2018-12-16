<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GantiTipeForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_transaksi', function (Blueprint $table) {
            $table->dropForeign('table_transaksi_id_tayang_foreign');
            $table->dropForeign('table_transaksi_id_pelanggan_foreign');
            $table->foreign('id_tayang')->references('id_tayang')->on('table_tayang')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('table_pelanggan')->onDelete('cascade');
        });

        Schema::table('table_tayang', function (Blueprint $table) {
            $table->dropForeign('table_tayang_id_film_foreign');
            $table->foreign('id_film')->references('id_film')->on('table_film')->onDelete('cascade');
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
