<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminArticel extends Model
{
    //
    protected $table = 'articel';
    protected $fillable = [
        'id',
        'title',
        'slug',
        'images',
        'desc',
        'description',
        'status',
        'cate_id'
    ];

}
