<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class nescarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([

            // 'users_id' => 0  ,
            'yerler_point_id' => 1 ,
            'brand' => 'Mercedes-Benz',
            'model' => 'C-Serisi',
            'year' => 2024,
            'Fuel_Type' => 'Benzin',
            'Car_Type' => 'otomatik',
            'color' => 'black',
            'photo' => "5mercides.png",
            'people_num' => 5,
            'depozito' => 3000,
            'toplam_km' =>  1500 ,
            'minimum_age' => 25,
            'minimum_ahliyet_year' => 2 ,
            'car_price' => 1088,
            'status' => 1,
        ]);

        Car::create([

            // 'users_id' => 0  ,
            'yerler_point_id' => 3 ,
            'brand' => 'Mercedes-Benz',
            'model' => 'E-Serisi',
            'year' => 2023,
            'Fuel_Type' => 'Elekitrik ',
            'Car_Type' => 'otomatik',
            'color' => 'Red',
            'photo' => "1mercides.png",
            'people_num' => 5,
            'depozito' => 4000,
            'toplam_km' =>  1500 ,
            'minimum_age' => 25,
            'minimum_ahliyet_year' => 2 ,
            'car_price' => 1500,
            'status' => 1,
        ]);

        Car::create([

            // 'users_id' => 0  ,
            'yerler_point_id' => 2 ,
            'brand' => 'BMW',
            'model' => '1 Serisi.',
            'year' => 2023,
            'Fuel_Type' => 'Benzin ',
            'Car_Type' => 'otomatik',
            'color' => 'Blue',
            'photo' => "2bmw.png",
            'people_num' => 5,
            'depozito' => 2500,
            'toplam_km' =>  1500 ,
            'minimum_age' => 23,
            'minimum_ahliyet_year' => 2 ,
            'car_price' => 1000,
            'status' => 1,
        ]);


        Car::create([

            // 'users_id' => 0  ,
            'yerler_point_id' => 2 ,
            'brand' => 'Chevrolet',
            'model' => '4 Serisi.',
            'year' => 2024,
            'Fuel_Type' => 'Benzin ',
            'Car_Type' => 'otomatik',
            'color' => 'Black',
            'photo' => "4shefer.png",
            'people_num' => 5,
            'depozito' => 4000,
            'toplam_km' =>  2000 ,
            'minimum_age' => 27,
            'minimum_ahliyet_year' => 3 ,
            'car_price' => 2000,
            'status' => 1,
        ]);

        Car::create([

            // 'users_id' => 0  ,
            'yerler_point_id' => 4 ,
            'brand' => 'Toyota',
            'model' => '4 Serisi.',
            'year' => 2024,
            'Fuel_Type' => 'Benzin ',
            'Car_Type' => 'otomatik',
            'color' => 'Black',
            'photo' => "3toyota.png",
            'people_num' => 5,
            'depozito' => 4000,
            'toplam_km' =>  2000 ,
            'minimum_age' => 27,
            'minimum_ahliyet_year' => 3 ,
            'car_price' => 2000,
            'status' => 1,
        ]);


        Car::create([

            // 'users_id' => 0  ,
            'yerler_point_id' => 5 ,
            'brand' => 'Toyota',
            'model' => '4 Serisi.',
            'year' => 2024,
            'Fuel_Type' => 'Benzin ',
            'Car_Type' => 'otomatik',
            'color' => 'Black',
            'photo' => "3toyota.png",
            'people_num' => 5,
            'depozito' => 4000,
            'toplam_km' =>  2000 ,
            'minimum_age' => 27,
            'minimum_ahliyet_year' => 3 ,
            'car_price' => 2000,
            'status' => 1,
        ]);






    }
}
