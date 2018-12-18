<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tayang extends Model
{
    use SoftDeletes;

    protected $table = 'table_tayang';
    protected $fillable = ['id_film','waktu_mulai','waktu_selesai','harga_tiket','studio','jumlah_kursi'];
    protected $primaryKey = 'id_tayang';
    protected $dates = ['deleted_at'];
}
