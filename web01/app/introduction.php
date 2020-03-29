<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class introduction extends Model
{
    protected $table = 'introduction';
    protected $primaryKey = 'id';
    protected $fillble = ['img','content'];
}
