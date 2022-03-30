<?php

namespace App\Http\Controllers;

use App\Models\CategorieImage;
use Illuminate\Http\Request;

class CategorieImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function affichageCategoryImage()
    {
        $categoryImageAll = CategorieImage::all();
        return view("admin.categoryImage.index",compact("categoryImageAll"));
    }
    public function index()
    {
        $category = CategorieImage::all();
        return view("admin.categoryImage.index", compact("category"));
    }



    public function destroy(CategorieImage $categories)
    {
        $categories->delete();
        return redirect()->back()->with('warning', 'Categories supprimé avec toutes les images associées');
    }


    public function edit(CategorieImage $categories)
    {
        $filters = CategorieImage::all();
        return view("admin.categoryImage.edit",compact("categories","filters"));
    }

    public function update(Request $request, CategorieImage $categories)
    {
        $request->validate([
            'nom' => 'required',
            'filter' => 'required',
        ]);

        $categories->nom = $request->nom;
        $categories->filter = $request->filter;
        $categories->save();
        return redirect()->route('categoryImage.index')->with('success', 'categorie ' . $request->nom .' modifiée !');
    }

    public function create()
    {
        $filters = CategorieImage::all();

        return view('admin.categoryImage.create',compact("filters"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'filter' => 'required',
        ]);

        $categorie=new CategorieImage();
        $categorie->nom=$request->nom;
        $categorie->filter=$request->filter;
        $categorie->save();

        return redirect()->route('categoryImage.index')->with('success', 'Une nouvelle categorie ajoutée !');
    }

}
