<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    public $timestamps = false;
    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
    ];
}
