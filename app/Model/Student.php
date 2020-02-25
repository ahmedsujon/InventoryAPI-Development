<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'classe_id',
        'section_id',
        'name', 'phone',
        'email',
        'password',
        'image',
        'address',
        'gender',
    ];
}