<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "fonction_id"=>1,
                "img"=>"employé_0.jpg",
                "fullname"=>"Jeanette Owens",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
                
            ],
            [
                "fonction_id"=>2,
                "img"=>"employé_1.jpg",
                "fullname"=>"Henry Garret",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>3,
                "img"=>"employé_2.jpg",
                "fullname"=>"Tommy Alexander",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>4,
                "img"=>"employé_3.jpg",
                "fullname"=>"Penny Soto",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>5,
                "img"=>"employé_4.png",
                "fullname"=>"Alex Cox",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>4,
                "img"=>"employé_5.png",
                "fullname"=>"Alfredo Romero",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>6,
                "img"=>"employé_6.jpg",
                "fullname"=>"Glenda Gilbert",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>7,
                "img"=>"employé_7.png",
                "fullname"=>"Sheila Carter",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
        ]);

    }
}
