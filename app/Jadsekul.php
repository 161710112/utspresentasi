<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadsekul extends Model
{
    protected $table = 'jadsekuls';
    protected $fillable = ['hari','jam','materi','pembina','tempat'];
    public $timestamps = true;
}
