<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YerlerPoints extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'name',
        'city' ,
        'ilce',
        'mahalle',
        'address',
        'location',
        'phone',
    ];

    public function YerlerPointCars() {
        return $this->hasMany( Car::class , 'yerler_point_id');
    }

    public function YerlerPointDrivers() {
        return $this->hasMany(Driver::class , 'yerler_point_id');
    }

}
