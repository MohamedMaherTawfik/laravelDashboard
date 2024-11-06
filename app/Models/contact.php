<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $timestamps = false;
    protected $table = 'contacts';
    protected $fillable = [
        'address',
        'email',
        'phone',
    ];
}
