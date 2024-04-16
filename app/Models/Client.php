<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'development',
        'cluster',
        'lot',
        'debt',
    ];
    
    use HasFactory;
}
