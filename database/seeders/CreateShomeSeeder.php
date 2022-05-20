<?php

namespace Database\Seeders;

use App\Models\SHome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateShomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
