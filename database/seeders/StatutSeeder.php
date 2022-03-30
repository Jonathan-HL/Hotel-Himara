<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->insert(
            [
                [
                    "statut" => "true",
                    "created_at" => now(),
                ],
                [
                    "statut" => "false",
                    "created_at" => now(),

                ],
                [
                    "statut" => "hidden",
                    "created_at" => now(),

                ],
            ]
        );
    }
}
