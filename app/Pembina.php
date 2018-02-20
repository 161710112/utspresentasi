<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table = 'pembinas';
    protected $fillable = ['nama','ttl','umur','alamat','spesialis_materi'];
    public $timestamps = true;
}
