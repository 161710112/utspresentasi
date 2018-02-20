<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['anggota','nama_anggota','jumlah_anggota','visi','misi'];
    public $timestamps = true;
}
