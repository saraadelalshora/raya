<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    //
    protected $fillable=['feature_id', 'feature_deatils_id', 'product_id','price'];

      public function featuredeatils()
    {
        return $this->belongsTo('App\FeatureDetail');
    }
       public function feature()
    {
        return $this->belongsTo('App\Feature');
    } 
        public function product()
    {
        return $this->belongsTo('App\product');
    } 
}
