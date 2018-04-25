<?php

namespace App;

use Illuminate\Database\Eloquent\Model;






class Business extends Model
{
    public function category()
    {
        return $this->hasOne('App\Category', 'category_id');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag', 'tag_id');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo', 'business_id');
    }
}
