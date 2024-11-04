<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partners extends Model
{
    public $timestamps = false;

    protected $table = 'partners';

    protected $fillable = [
        'image',
    ];
}
