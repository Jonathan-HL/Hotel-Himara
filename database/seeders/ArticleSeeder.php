<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                "title" => "10 Tips for Holiday Travel",
                "img" => "blog-post1.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimosHorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
                "categorie_article_id"=>1,
                // "tag_id"=>1,
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "created_at" => now()
            ],
            [
                "title" => "Are you ready to enjoy your holidays",
                "img" => "blog-post2.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam impedit
                nihil est modi amet, sapiente sed hic quaerat suscipit sunt labore, ea
                quas ut cumque, cum nam accusantium molestiae ipsum Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
                "categorie_article_id"=>2,
                // "tag_id"=>1,
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "created_at" => now()
            ],
            [
                "title" => "Honeymoon in Hotel Himara",
                "img" => "blog-post3.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribusHorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
                "categorie_article_id"=>1,
                // "tag_id"=>1,
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "created_at" => now()
            ],
            [
                "title" => "Travel Gift Ideas for Every Type of
                Traveler",
                "img" => "blog-post4.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribusHorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
                "categorie_article_id"=>1,
                // "tag_id"=>1,
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "created_at" => now()
            ],
            [
                "title" => "Breakfast with coffee and orange juice",
                "img" => "blog-post5.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribusHorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
                "categorie_article_id"=>4,
                // "tag_id"=>1,
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "created_at" => now()
            ],
            [
                "title" => "Running On Sand",
                "img" => "blog-post6.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                vitae doloribusHorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                iusto odio dignissim qui blandit praesent luptatum zzril delenit...",
                "categorie_article_id"=>3,
                // "tag_id"=>1,
                "auteur"=>"Mark wiens",
                "creation"=>"2015-11-11",
                "created_at" => now()
            ],
        ]);
        
        $articles = Article::all();

        // rajout simple par article id
        // DB::table('tag_articles')->insert([
        //     [
        //         "tag_id"=>2,
        //         "article_id"=>1,
        //     ],
        //     [
        //         "tag_id"=>3,
        //         "article_id"=>1,
        //     ],
        //     [
        //         "tag_id"=>1,
        //         "article_id"=>1,
        //     ],
        // ]);


        // me rajoute mes tag id en random
        Tag::all()->each(function ($tags) use ($articles) {
            $tags->articles()->attach(
            $articles->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
