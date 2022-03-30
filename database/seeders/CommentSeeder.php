<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "name"=>"cocktail",
                "email"=>"aw@hotmail.com",
                "website"=>"",
                "commentaire"=>"blablabla...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat.",
                "photoProfil"=>"blog-post1.jpg",
                "validate"=>true,
                "article_id"=>1,
                "created_at"=>now(),
            ],
            [
                "name"=>"SPA",
                "email"=>"ax@hotmail.com",
                "website"=>"",
                "commentaire"=>"blablabla...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat.",
                "photoProfil"=>"blog-post1.jpg",
                "validate"=>true,

                "article_id"=>1,
                "created_at"=>now(),
            ],
            [
                "name"=>"PISCINE",
                "email"=>"az@hotmail.com",
                "website"=>"",
                "commentaire"=>"blablabla...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat.",
                "photoProfil"=>"blog-post1.jpg",
                "validate"=>true,

                "article_id"=>1,
                "created_at"=>now(),
            ],
            [
                "name"=>"cocktail",
                "email"=>"as@hotmail.com",
                "website"=>"",
                "commentaire"=>"blablabla...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat.",
                "photoProfil"=>"blog-post2.jpg",
                "validate"=>true,

                "article_id"=>2,
                "created_at"=>now(),
            ],
            [
                "name"=>"cocktail",
                "email"=>"aq@hotmail.com",
                "website"=>"",
                "commentaire"=>"blablabla...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat.",
                "photoProfil"=>"blog-post3.jpg",
                "validate"=>true,

                "article_id"=>3,
                "created_at"=>now(),
            ],
            [
                "name"=>"cocktail",
                "email"=>"aa@hotmail.com",
                "website"=>"",
                "commentaire"=>"blablabla...Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat.",
                "photoProfil"=>"blog-post4.jpg",
                "validate"=>false,

                "article_id"=>4,
                "created_at"=>now(),
            ],
        ]);

    }
}
