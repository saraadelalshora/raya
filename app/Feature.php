<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    // 'name_ar', 'name_en', 'slug',
  protected $fillable = [
        'name_ar', 'name_en', 'slug',
    ];
    
     public function feature_details()
    {
        return $this->belongsToMany('App\FeatureDetail');
    }
     public function productFeature()
    {
        return $this->hasMany('App\ProductFeature');
    }
}
