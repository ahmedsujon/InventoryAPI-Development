<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}