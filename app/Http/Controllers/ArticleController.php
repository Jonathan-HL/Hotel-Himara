<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\categorieArticle;
use App\Models\Tag;
use App\Models\tagArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('editor');
    }
    public function affichage()
    {
        // $blog = Article::first();
        $blog = Article::all();
        return view("admin.blog.index", compact("blog"));
    }

    public function create()
    {
        // $filters = Article::all();
        $categorieArticle = categorieArticle::all();
        $tag = Tag::all();

        // return view('admin.categoryImage.create',compact("filters"));
        return view('admin.blog.create', compact("categorieArticle", "tag"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'img' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'creation' => 'required',
        ]);

        $article = new Article();
        $article->title = $request->title;
        // $categorie->img=$request->img;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->creation = $request->creation;


        if ($request->img) {
            $request->file('img')->storePublicly('images/', 'public');
            $article->img = $request->file('img')->hashName();
        } else {
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/' . $token, $fichierURL);
            $article->img = $token;
        }

        // dd($request);
        $article->categorie_article_id = $request->categorie_article_id;

        $article->save();
        $article->tags()->attach($request->tag);


        return redirect()->route('blog.index')->with('success', 'Un article a été ajoutée !');
    }


    public function edit(Article $blogs)
    {
        // $teams = Team::all();
        $categorieArticle = categorieArticle::all();
        $tag = Tag::all();
        return view("admin.blog.edit", compact("blogs", "categorieArticle", "tag"));
    }

    public function update(Request $request, Article $blogs)
    {

        $request->validate([
            'title' => 'required',
            'img' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'creation' => 'required',
        ]);

        // $teams->img = $request->img;

        if ($request->img) {
            $request->file('img')->storePublicly('images/', 'public');
            $blogs->img = $request->file('img')->hashName();
        } else {
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/' . $token, $fichierURL);
            $blogs->img = $token;
        }

        $blogs->title = $request->title;
        $blogs->description = $request->description;
        $blogs->auteur = $request->auteur;
        $blogs->creation = $request->creation;
        $blogs->save();
        return redirect()->route('blog.index')->with('success', 'article ' . $request->title . ' modifiée !');
    }

    public function destroy($id)
    {
        if(!Article::where('id', $id)->exists()){
            return redirect()->back();
        }
        // dd($image);
        $image = Article::find($id);

        // Storage
        $destination = "images/" . $image->img;
        Storage::disk("public")->delete($destination);
        $image->delete();
        return redirect()->back()->with('warning', 'article bien supprimé');
    }
}
