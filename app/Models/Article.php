<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function categorie_article()
    {
        return $this->belongsTo(categorieArticle::class, 'categorie_article_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, "tag_articles");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
