<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name','image'
    ];

    protected $dates = ['created_at','updated_at'];
}
