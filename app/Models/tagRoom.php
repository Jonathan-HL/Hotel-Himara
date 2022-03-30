<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagRoom extends Model
{

    use HasFactory;
    // fait ref a la table room_tags
    protected $table="room_tags";

    public function rooms()
    {
        return $this->belongsToMany(Room::class,"tag_rooms", 'tag_room_id');
    }
}
