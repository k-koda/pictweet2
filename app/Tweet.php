<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model {
    protected $fillbale = array('name', 'image', 'text');
}
