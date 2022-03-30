<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            ["fonction"=>"HOUSEKEEPER",],
            ["fonction"=>"RECEPTIONIST",],
            ["fonction"=>"CHEF",],
            ["fonction"=>"HOTEL MANAGER",],
            ["fonction"=>"ROOM SERVICE",],
            ["fonction"=>"MARKETING ADVISOR",],
            ["fonction"=>"HOTEL MANAGER",],
        ]);

    }
}
