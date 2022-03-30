<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "title" => "10 Tips for Holiday Travel",
                "img" => "blog-post1.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
                "created_at" => now()
            ],
            [
                "title" => "Are you ready to enjoy your holidays",
                "img" => "blog-post2.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam impedit
                nihil est modi amet, sapiente sed hic quaerat suscipit sunt labore, ea
                quas ut cumque, cum nam accusantium molestiae ipsum ",
                "created_at" => now()
            ],
            [
                "title" => "Honeymoon in Hotel Himara",
                "img" => "blog-post3.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribus",
                "created_at" => now()
            ],
            [
                "title" => "Travel Gift Ideas for Every Type of
                Traveler",
                "img" => "blog-post4.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribus",
                "created_at" => now()
            ],
            [
                "title" => "Breakfast with coffee and orange juice",
                "img" => "blog-post5.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribus",
                "created_at" => now()
            ],
            [
                "title" => "Running On Sand",
                "img" => "blog-post6.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribus",
                "created_at" => now()
            ],
        ]);
    }
}
