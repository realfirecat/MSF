<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thema extends Model
{
    protected $fillable = ['id', 'description'];
    public $timestamps = false;
}
