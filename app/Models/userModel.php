<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    protected $fillable = [

        'fname',
        'lname',
        'email',
        'password',
        'gender',
        'picture',
        'emp_dep_id',
    ];
}
