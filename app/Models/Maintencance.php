<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintencance extends Model
{
    use HasFactory;

    protected $fillable = [
        "car_id"  ,
        "last_maintence_date",
        "problem",
        "cost",
        "description",
        "bil_photo",
        'status',
    ];
}
