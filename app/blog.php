<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'artikels';
    protected $fillable = ['title','subtitle','content','author'];
}
