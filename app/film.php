<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = 'table_film';
    protected $fillable = ['nama_film','deskripsi_film','durasi','cover_image'];
}
