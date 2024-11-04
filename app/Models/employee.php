<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'experience',
        'photo',
        'nid_no',
        'salary',
        'vacation',
        'city',
    ];
}
