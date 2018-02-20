<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materis';
    protected $fillable = ['pp','pk','tandu','doras','asican'];
    public $timestamps = true;
}
