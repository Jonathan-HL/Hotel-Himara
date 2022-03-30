<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagArticle extends Model
{
    use HasFactory;
    // model ne doit pas exister normalement
    public function articles()
    {
        return $this->belongsToMany(Article::class,"tag_articles");
    }
}
