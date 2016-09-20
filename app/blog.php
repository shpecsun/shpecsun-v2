<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    public function author_image(){
    	return $this->hasOne('App\images','entity','slug')->where('type','profile');
    }
    public function banner_image()
    {
    	return $this->hasOne('App\images','entity','slug')->where('type','banner');
    }
}
