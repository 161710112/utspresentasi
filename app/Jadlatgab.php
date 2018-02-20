<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadlatgab extends Model
{
    protected $table = 'jadlatgabs';
    protected $fillable = ['no_absen','lokasi','jam','hari','materi'];
    public $timestamps = true;
}
