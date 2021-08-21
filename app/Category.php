<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'gallery_categories';

    public function gallery(){
        return $this->hasMany('App\Gallery');
    }
}
