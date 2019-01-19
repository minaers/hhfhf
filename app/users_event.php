<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_event extends Model
{
    protected $table = 'users_event';
    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'email',
        'gender',
        'age',
        'link',
        'optone',
        'opttwo',
        'optthree',
        'price',
        'host',
        'token',
];

}
