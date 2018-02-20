<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $fillable = ['nama_kegiatan','kegiatan','hari_kegiatan','waktu_kegiatan','tempat_kegiatan'];
    public $timestamps = true;
}
