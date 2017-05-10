<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUtility extends Model
{
    //
    protected $table = 'utility';
    protected $fillable = [
        'id',
        'name',
        'images',
    ];
}
