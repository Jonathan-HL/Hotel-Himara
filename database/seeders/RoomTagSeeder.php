<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_tags')->insert(
            [
                [
                    "nom"=>"RED",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"DARK",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"YELLOW",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"BLUE",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"PINK",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"GREEN",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"GRAY",
                    "created_at"=>now(),
                ],
                [
                    "nom"=>"BROWN",
                    "created_at"=>now(),
                ],
            ]);
    }
}
