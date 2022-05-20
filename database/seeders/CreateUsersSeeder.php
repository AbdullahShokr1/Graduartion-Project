<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\SHome;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'AbdullahShokr',
            ],
        ];
        $user = [
            [
                'name' => 'User',
                'email' => 'user1@gmail.com',
                'password' => 'user123',
            ],
        ];
        foreach ($Admin as $key => $value) {
            Admin::create($value);
        }
        foreach ($user as $key => $value) {
            User::create($value);

        }
        $Shome = [
            [
                'social1'=>'www.sdasdasd.com',
                'social2'=>'www.sdasdasd.com',
                'social3'=>'www.sdasdasd.com',
                'social4'=>'www.sdasdasd.com',
            ],
        ];
        foreach ($Shome as $key => $value) {
            SHome::create($value);
        }
    }
}
