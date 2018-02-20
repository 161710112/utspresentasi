<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $table = 'sejarahs';
    protected $fillable = ['nama','ttl','warga_negara','sejarah','semenjak'];
    public $timestamps = true;
}
