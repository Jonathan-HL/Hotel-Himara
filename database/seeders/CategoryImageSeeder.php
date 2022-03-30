<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorie_images')->insert([
            [
                "nom"=>"restaurant",
                "filter"=>"filter-restaurnat",
                "created_at"=>now(),
            ],
            [
                "nom"=>"swimmingpool",
                "filter"=>"filter-swimmingpool",
                "created_at"=>now(),
            ],
            [
                "nom"=>"spa",
                "filter"=>"filter-spa",
                "created_at"=>now(),
            ],
            [
                "nom"=>"roomview",
                "filter"=>"filter-roomview",
                "created_at"=>now(),
            ],
        ]);
    }
}
