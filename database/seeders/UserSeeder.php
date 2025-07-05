<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // add company

        User::factory()->create([
            'name' => 'Enes',
            'surname' => 'Karakaya',
            'email' => 'kullanici@gmail.com',
            'phone' => '05352723705',
            'Tc_id' => '14725836902', //99789632541
            'is_company' => '0',
            'full_data' => '1',
            'birth_date' => '2022-05-15',
            'password' => Hash::make('kullanici'),
        ]);

        User::factory()->create([
            'name' => 'enes',
            'surname' => 'karakaya',
            'companyName' => "karakayaaa" ,
            'email' => 'admin@gmail.com',
            'phone' => '05555555555',
            'Tc_id' => '12345678901', //99785236718
            'is_company' => '1',
            'full_data' => '1',
            'birth_date' => '1983-11-08',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'best',
            'surname' => 'man2',
            'companyName' => "The Best" ,
            'email' => 'bestman2@gmail.com',
            'phone' => '05357459632',
            'Tc_id' => '99785236718',
            'is_company' => '1',
            'full_data' => '1',
            'birth_date' => '1988-10-04',
            'password' => Hash::make('bestman2'),
        ]);


        User::factory()->create([
            'name' => 'gold',
            'surname' => 'man2',
            'companyName' => "The Gold" ,
            'email' => 'goldman2@gmail.com',
            'phone' => '05357459632',
            'Tc_id' => '99785236718',
            'is_company' => '1',
            'full_data' => '1',
            'birth_date' => '1990-05-12',
            'password' => Hash::make('goldman2'),
        ]);

        // add user

       /* User::factory()->create([
            'name' => 'Enes',
            'surname' => 'Karakaya',
            'email' => 'kullanici@gmail.com',
            'phone' => '05352723705',
            'Tc_id' => '14725836902', //99789632541
            'is_company' => '0',
            'full_data' => '1',
            'birth_date' => '2022-05-15',
            'password' => Hash::make('123'),
        ]); */


        User::factory()->create([
            'name' => 'baraa',
            'surname' => 'jazah',
            'email' => 'baraajazah@gmail.com',
            'phone' => '05352723705',
            'Tc_id' => '99789632541',
            'is_company' => '0',
            'full_data' => '1',
            'birth_date' => '2024-09-10',
            'password' => Hash::make('baraajazah'),
        ]);

        User::factory()->create([
            'name' => 'mohammed',
            'surname' => 'ali',
            'email' => 'mohammedali@gmail.com',
            'phone' => '05357896340',
            'Tc_id' => '99148523697',
            'is_company' => '0',
            'full_data' => '0',
            'birth_date' => '2000-11-05',
            'password' => Hash::make('mohammedali'),
        ]);





    }

}
