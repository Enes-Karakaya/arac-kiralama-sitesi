<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'yerler_point_id',
        'name',
        'surname' ,
        'tc',
        'birth_day',
        'email',
        'phone',
        'driver_price',
        'status',

    ];
}
