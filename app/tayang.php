<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tayang extends Model
{
    protected $table = 'table_tayang';
    protected $fillable = ['id_film','waktu_mulai','waktu_selesai','harga_tiket','studio','jumlah_kursi'];
    protected $primaryKey = 'id_tayang';
}
