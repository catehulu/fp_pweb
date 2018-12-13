<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tayang extends Model
{
    protected $table = 'table_tayang';
    protected $fillable = ['waktu_mulai','waktu_selesai','harga_tiket'];
}
