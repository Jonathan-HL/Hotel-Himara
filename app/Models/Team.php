<?php

namespace App\Models;

use App\Http\Controllers\TeamController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function fonction()
    {
        return $this->belongsTo(Fonction::class, 'fonction_id');
    }
}
