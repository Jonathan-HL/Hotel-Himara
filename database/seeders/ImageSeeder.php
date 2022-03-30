<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('images')->insert([
            [
                "nom"=>"cocktail",
                "url"=>"gallery3.jpg",
                "categorie_image_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"chambre",
                "url"=>"gallery2.jpg",
                "categorie_image_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"piscine",
                "url"=>"gallery1.jpg",
                "categorie_image_id"=>2,
                "created_at"=>now(),

            ],
            [
                "nom"=>"spa",
                "url"=>"gallery6.jpg",
                "categorie_image_id"=>3,
                "created_at"=>now(),

            ],
            [
                "nom"=>"breakfast",
                "url"=>"gallery4.jpg",
                "categorie_image_id"=>1,
                "created_at"=>now(),

            ],
            [
                "nom"=>"lit",
                "url"=>"gallery9.jpg",
                "categorie_image_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"mer",
                "url"=>"gallery10.jpg",
                "categorie_image_id"=>3,
                "created_at"=>now(),

            ],
        ]);

    }
}
