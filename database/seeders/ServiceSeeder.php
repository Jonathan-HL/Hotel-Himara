<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "image"=>"restaurant.jpg",
                "logo"=>"flaticon-tray-1",
                "titre"=>"Restaurant",
                "description"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt
                ut laoreet.",

            ],
            [
                "image"=>"spa.jpg",
                "logo"=>"flaticon-nature",
                "titre"=>"Spa - Beauty &amp; Health",
                "description"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt
                ut laoreet.",

            ],
            [
                "image"=>"conference.jpg",
                "logo"=>"flaticon-screen-1",
                "titre"=>"Conference Room",
                "description"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt
                ut laoreet.",

            ],
            [
                "image"=>"swimming.jpg",
                "logo"=>"flaticon-sports",
                "titre"=>"Swimming Pool",
                "description"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt
                ut laoreet.",

            ],
        ]);

    }
}
