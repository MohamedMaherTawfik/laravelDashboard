<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class latest extends Model
{
    public $timestamps = false;
    protected $table = 'latests';

    protected $fillable = [
        'image',
    ];
}
