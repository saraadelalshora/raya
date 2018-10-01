<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    //
    protected $fillable = [
         'title_en', 'title_ar', 'img', 'link', 'status',
    ];
}
