<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perlombaan extends Model
{
    protected $table = 'perlombaans';
    protected $fillable = ['spesialis','nama_perlombaan','tgl_lomba','tgl_daftar_ulang','tempat','jumlah_peserta'];
    public $timestamps = true;
}
