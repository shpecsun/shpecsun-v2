<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boardmembers extends Model
{
    protected $table = 'boardmembers';
    protected $primaryKey = 'id';

    public function image()
    {
        return $this->hasOne('App\images', 'entity', 'email');
    }

    public function links()
    {
        return $this->hasMany('App\links', 'entity', 'email')->orderBy('type');
    }
}
