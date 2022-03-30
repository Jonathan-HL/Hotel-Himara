<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\CategorieImage;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function affichage()
    {
        $imageAll = Image::all();
        return view("admin.gallery.index",compact("imageAll"));
    }
    // public function affichageCategoryImage()
    // {
    //     $categoryImageAll = CategorieImage::all();
    //     return view("admin.categoryImage.index",compact("categoryImageAll"));
    // }
    public function create()
    {
        $categorieImage = CategorieImage::all();

        return view("admin.gallery.create",compact("categorieImage"));
    }
    public  function  store(Request  $request){

        request()->validate([
            "nom" => ["required"],
        ]);

		$store = new  Image();
		$store->nom = $request->nom;
		// $store->url = $request->url;
        if ($request->url) {
            $request->file('url')->storePublicly('images/','public');
            $store->url = $request->file('url')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/'.$token , $fichierURL);
            $store->url = $token;
        }

        // dd($request);
        $store->categorie_image_id = $request->categorie_image_id;

		$store->save();
		return  redirect()->route("gallery.index")->with('success', $request->nom . ' bien ajouté !');
	}

    public function destroy(Image $image)
    {
        // $this->authorize("isAdmin");

        // Storage
        $destination = "images/". $image->url;
        // dd($destination);
        Storage::disk("public")->delete($destination);
        // dd($destination);
        $image->delete();
        return redirect()->back()->with('warning', 'Image bien supprimé');
    }
}
