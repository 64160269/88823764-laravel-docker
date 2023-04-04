<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'emp_fname',
        'emp_lname',
        'emp_email',
        'emp_password',
        'emp_gender',
        'emp_picture',
        'emp_dep_id',
    ];
}
