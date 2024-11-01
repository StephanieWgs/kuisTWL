<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
    ];
}
