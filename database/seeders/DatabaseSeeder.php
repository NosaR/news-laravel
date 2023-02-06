<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Clifford Lyons',
                'email'=>'superadmin11@hotmail.com',
                'role'=>'1',
                'job'=>'Super Admin',
                'password'=> bcrypt('superadmin11'),
            ],
            [
                'name'=>'Verity Fuller',
                'email'=>'chiefeditor22@gmail.com',
                'role'=>'2',
                'job'=>'Chief Editor',
                'password'=> bcrypt('chiefeditor22'),
            ],
            [
                'name'=>'Kabir Hicks',
                'email'=>'editor33@gmail.com',
                'role'=>'3',
                'job'=>'Editor',
                'password'=> bcrypt('editor33'),
            ],
            [
                'name'=>'Josiah Prince',
                'email'=>'adseditor44@gmail.com',
                'role'=>'4',
                'job'=>'Ads Editor',
                'password'=> bcrypt('adseditor44'),
            ],
            [
                'name'=>'Gerard French',
                'email'=>'author55@gmail.com',
                'role'=>'5',
                'job'=>'Author',
                'password'=> bcrypt('author55'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
