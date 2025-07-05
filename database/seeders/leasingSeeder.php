<?php

namespace Database\Seeders;

use App\Models\Leasing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class leasingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Leasing::create([

            // 'users_id' => 0  ,
            'user_id' => 3 ,
            'car_id' => 1,
            'rental_day' => '2024-09-12',
            'rental_hour' => '10:00',
            'delivery_day' => '2024-09-15',
            'delivery_hour' => '12:00',
            'day_num' => 3,
            'teslim_alindi' =>1,
            'teslim_verildi' => 1,
            'driver_id' => 1,
            'driver_price' =>  1000 ,
            'status' => 1 ,
        ]);


        Leasing::create([

            // 'users_id' => 0  ,
            'user_id' => 3 ,
            'car_id' => 2,
            'rental_day' => '2024-09-17',
            'rental_hour' => '10:00',
            'delivery_day' => '2024-09-19',
            'delivery_hour' => '12:00',
            'day_num' => 2,
            'teslim_alindi' =>1,
            'teslim_verildi' => 0,
            'driver_id' => 1,
            'driver_price' =>  1000 ,
            'status' => 0 ,
        ]);



    }
}
