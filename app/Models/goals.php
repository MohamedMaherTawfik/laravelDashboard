<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goals extends Model
{
    public $timestamps = false;
    protected $table = 'goals';
    protected $fillable = [
        'title',
        'subtitle'
    ];
}
