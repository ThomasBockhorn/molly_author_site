<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //Sets up the relationship between images and books
    public function books()
    {
        return $this->belongsTo(Books::class);
    }
}