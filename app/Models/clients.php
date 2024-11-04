<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    public $timestamps = false;
    protected $table = 'clients';

    protected $fillable = [
        'image',
    ];
}
