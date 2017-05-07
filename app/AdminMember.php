<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMember extends Model
{
    //
    //
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'images',
        'tell',
        'address',
        'rul',
        'remember_token'
    ];
}
