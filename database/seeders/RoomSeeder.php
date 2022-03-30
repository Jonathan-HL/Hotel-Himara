<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Room;
use App\Models\Statut;
use App\Models\tagRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                "img"=>"single/single1.jpg",
                "titre"=>"ISTANBUL",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€89 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>1,
                "created_at"=>now(),
            ],
            [
                "img"=>"double/double.jpg",
                "titre"=>"TANGER",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€129 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>2,
                "created_at"=>now(),
            ],
            [
                "img"=>"deluxe/deluxe.jpg",
                "titre"=>"TOKYO",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€189 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>3,
                "created_at"=>now(),
            ],
            [
                "img"=>"family/family.jpg",
                "titre"=>"PARIS",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€149 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>4,
                "created_at"=>now(),
            ],
            [
                "img"=>"king/king.jpg",
                "titre"=>"RIO DE JANEIRO",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€289 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>1,
                "created_at"=>now(),
            ],
            [
                "img"=>"honeymoon/honeymoon.jpg",
                "titre"=>"SICILIA",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€169 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>1,
                "created_at"=>now(),
            ],
            [
                // "img"=>"honeymoon/honeymoon.jpg",
                "img"=>"view/view.jpg",
                "titre"=>"MOSCOU",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€119 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>2,
                "created_at"=>now(),
            ],
            [
                "img"=>"luxury/luxury.jpg",
                "titre"=>"LONDON",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€349 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>3,
                "created_at"=>now(),
            ],
            [
                "img"=>"small/small.jpg",
                "titre"=>"DUBAÎ",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio consequatur sapiente incidunt sequi, cumque amet possimus nisi perferendis, similique labore pariatur ea iusto corporis inventore maxime laudantium. Fugit, voluptate!",
                "prix"=>"€39 / night",
                "litMax"=>1,
                "personMax"=>2,
                "category_room_id"=>4,
                "created_at"=>now(),
            ],
        ]);

        $rooms = Room::all();

        // me rajoute mes tag id en random
        tagRoom::all()->each(function ($tagRooms) use ($rooms) {
            $tagRooms->rooms()->attach(
            $rooms->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        $features = Feature::all();
        $statut = Statut::all();
        Room::all()->each(function ($chambre) use ($features, $statut) {
            $features->each(function ($service) use ($chambre, $statut){
                $chambre->features()->attach(
                    $service->id, ['statut_id'=>$statut->random(1)->first()->id]
                );
            });
        });

    }
}
