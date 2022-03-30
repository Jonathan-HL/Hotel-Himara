<?php

namespace Database\Seeders;

use App\Models\CategorieImage;
use App\Models\Feature;
use App\Models\Image;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategoryImageSeeder::class,
            ImageSeeder::class,
            CategoryArticleSeeder::class,
            // TagArticleSeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            FonctionSeeder::class,
            TeamSeeder::class,
            ServiceSeeder::class,
            CategoryRoomSeeder::class,
            StatutSeeder::class,
            FeatureSeeder::class,
            RoomTagSeeder::class,
            RoomSeeder::class,
            InfoSeeder::class,
            VideoSeeder::class,
            CarouselSeeder::class,
            HimaraPictureSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
