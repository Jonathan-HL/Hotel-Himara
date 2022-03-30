<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "nom"=>"BreakFast",
                "icon"=>"fa fa-coffee",
                "description"=>"breakfast included",
            ],
            [
                "nom"=>"WIFI",
                "icon"=>"fa fa-wifi",
                "description"=>"free wifi",
            ],
            [
                "nom"=>"TV",
                "icon"=>"fa fa-television",
                "description"=>"Plasma TV with cable channels",
            ],
            [
                "nom"=>"Bathroom",
                "icon"=>"fa fa-bath",
                "description"=>"2 bathrooms",
            ],
            [
                "nom"=>"DOUBLE BED",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"80 SQ MT",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"3 PERSONS",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"FREE INTERNET",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"PRIVATE BALCONY",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"FREE NEWSPAPER",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"FLAT SCREEN TV",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"BEACH VIEW",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"FULL AC",
                "icon"=>null,
                "description"=>null,
            ],
            [
                "nom"=>"ROOM SERVICE",
                "icon"=>null,
                "description"=>null,
            ],

        ]);

    }
}
