<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    protected $fillable = ['id', 'title', 'content', 'fk_userID', 'fk_themaID'];
}
