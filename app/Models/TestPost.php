<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class TestPost extends Eloquent
{
    protected $connection = 'mongodb';  // Use MongoDB connection
    protected $fillable = ['title', 'content'];  // Fillable fields
}
