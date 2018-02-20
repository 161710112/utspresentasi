<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = ['nama','kelas','alamat','spesialis','tgl_pelantikan'];
    public $timestamps = true;
}
