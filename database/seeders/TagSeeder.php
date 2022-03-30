<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\tagArticle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
        [
            [
                "nom"=>"PARTY",
                "created_at"=>now(),
            ],
            [
                "nom"=>"TRAVEL",
                "created_at"=>now(),
            ],
            [
                "nom"=>"WEDDING",
                "created_at"=>now(),
            ],
            [
                "nom"=>"FOOD",
                "created_at"=>now(),
            ],
            [
                "nom"=>"MUSIC",
                "created_at"=>now(),
            ],
            [
                "nom"=>"CITY",
                "created_at"=>now(),
            ],
            [
                "nom"=>"IMAGE",
                "created_at"=>now(),
            ],
            [
                "nom"=>"HOTEL",
                "created_at"=>now(),
            ],
        ]);

      
    }
}
