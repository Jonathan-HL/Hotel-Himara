<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorieRoom extends Model
{
    use HasFactory;
    protected $table = "category_rooms";

    public function rooms()
    {
        return $this->hasMany(Room::class, "category_room_id");
    }
}
