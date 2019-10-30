<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //Sets up the relationship between books and images
    public function images()
    {
        return $this->hasMany(Images::class);
    }
}