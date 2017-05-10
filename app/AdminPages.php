<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPages extends Model
{
    //
    protected $table = 'pages';
    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'cate_id',
        'status',
    ];
}
