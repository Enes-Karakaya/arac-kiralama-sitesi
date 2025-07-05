<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [

        'users_id  ' ,
        'yerler_point_id' ,

        'brand',
        'model',
        'year',
        'Fuel_Type',
        'Car_Type',
        'color',
        'photo',
        'people_num',
        'depozito',
        'toplam_km',
        'teslimat_place',
        'teslimat_address',
        'minimum_age',
        'minimum_ahliyet_year',
        'car_price',
        'status',

    ];


    public function carMaintence() {
        return $this->hasMany(Maintencance::class , 'car_id');
    }

    public function carLeasing() {
        return $this->hasMany(Leasing::class , 'car_id');
    }


    public function carViolation() {
        return $this->hasMany(Violation::class , 'car_id');
    }


}
