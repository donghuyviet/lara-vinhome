<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSlide extends Model
{
    protected $table = 'slide';
    protected $fillable = [
        'id',
        'title',
        'description',
        'images',
        'status'
    ];
}
