<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'table_transaksi';
    protected $fillable = ['jumlah_tiket','tgl_transaksi','studio','kursi'];
}
