<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ketua extends Model
{
    protected $table = 'ketuas';
    protected $fillable = ['nama','kelas','ttl','alamat','spesialis'];
    public $timestamps = true;
}
