<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'table_pelanggan';
    protected $fillable = ['nama_pelanggan','email','no_telp'];
}
