<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessTag extends Model
{

 
public function Business_Tag()
{
    return $this->belongsToMany('App\Tag', 'business_tags', 
      'user_id', 'business_id');
}

}
