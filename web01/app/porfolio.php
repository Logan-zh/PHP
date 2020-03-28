<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class porfolio extends Model
{
    protected $table = 'porfolio';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title' , 'content' , 'img',
    ];
}
