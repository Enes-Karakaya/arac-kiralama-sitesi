<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leasing extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id' ,
    'car_id',
    'rental_day',
    'rental_hour',
    'delivery_day',
    'delivery_hour',
    'day_num',
    'teslim_alindi',
    'teslim_verildi',
    'driver_id',
    'driver_price',
    'status',
    ];



    public function leasingPayment() {
        return $this->hasMany(Payment::class , 'leasing_id');
    }


}
