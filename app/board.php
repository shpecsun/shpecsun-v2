<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'board_members';
    protected $primaryKey = 'id';
}
