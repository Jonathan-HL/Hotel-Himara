<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = Room::all();
        foreach($rooms as $room){

            DB::table('reviews')->insert([

                'nom'=>'Marlene',
                'location'=>'Afghanistan',
                'image'=>'images/blog-post3.jpg',
                'note'=>rand(1,5),
                'room_id'=>$room->id,
                'description'=>"J'ai trop aimé, je vous conseille de ouf.",
            ]);
        }
    }
}
