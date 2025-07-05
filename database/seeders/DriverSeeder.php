<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create([

            'yerler_point_id' => 1 ,
            'name' => 'Ali',
            'surname' => "Omer",
            'tc' => 9985963254,
            'birth_day' => '1995-09-10',
            'email' => 'aliOmer@gmail.com',
            'phone' => 5352896324,
            'driver_price' => 1000 ,
            'status' => 0,
        ]);

        Driver::create([

            'yerler_point_id' => 1 ,
            'name' => 'ahmed',
            'surname' => "kalil",
            'tc' => 99752256963,
            'birth_day' => '1992-09-20',
            'email' => 'ahmedkalil@gmail.com',
            'phone' => 5352128934,
            'driver_price' => 1000 ,
            'status' => 0,
        ]);

        Driver::create([

            'yerler_point_id' => 1 ,
            'name' => 'baraa',
            'surname' => "abdo",
            'tc' => 99963463254,
            'birth_day' => '1989-01-08',
            'email' => 'baraaAbdo@gmail.com',
            'phone' => 5351470983,
            'driver_price' => 1000 ,
            'status' => 0,
        ]);

        Driver::create([

            'yerler_point_id' => 2 ,
            'name' => 'semra',
            'surname' => "yusef",
            'tc' => 99258631480,
            'birth_day' => '1994-12-30',
            'email' => 'semraYusuf@gmail.com',
            'phone' => 5352729381,
            'driver_price' => 1000 ,
            'status' => 0,
        ]);
    }
}
