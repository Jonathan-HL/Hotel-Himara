<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HimaraPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('himara_pictures')->insert([
            ["url"=>"images/logo-big-transparent.svg"],
        ]);

    }
}
