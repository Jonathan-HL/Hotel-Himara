<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('webmaster')->only('update');
    }
    // store
    public  function  store(Request  $request, $id)
    {

        $table = new  Comment();
        if (Auth::check()) {
            $request->validate([
                'commentaire' => ['required'],
            ]);
            $table->name = Auth::user()->name;
            $table->email = Auth::user()->email;
        } else {
            $request->validate([
                'name' => ['required'],
                'website' => ['required'],
                'email' => ['required'],
            ]);
            $table->name = $request->name;
            $table->email = $request->email;
            $table->website = $request->website;
        }
        $table->validate = false;
        $table->article_id = $id;
        $table->commentaire = $request->commentaire;
        $table->photoProfil = "images/blog-post1.jpg";

        $table->save();
        return  redirect()->back()->with('success', 'comment ' . ' votre commentaire doit être valider par le webmaser');
    }
    // edit
    // public  function  edit($id) {
    //     $edit = Comment::find($id);
    //     return  view ('pages.edit', compact("edit"));
    // }
    // update
    // public  function  update ($id, Request  $request) {
    //     $update = Comment::find($id);
    //     if (Auth::check()) {
    //         $update->name = Auth::user()->name;
    //         $update->email = Auth::user()->email;


    //     }else{

    //         $update->name = $request->name;
    //         $update->email = $request->email;
    //         $update->website = $request->website;
    //         $update->photoProfil = $request->photoProfil;
    //     }
    //     $update->commentaire = $request->commentaire;
    //     $update->save();
    //     return  redirect("/");
    // }

    // delete
    public function destroy($id)
    {
        $destroy = Comment::find($id);
        $destroy->delete();
        return  redirect()->back();
    }
    public function update($id)
    {
        $comment = Comment::find($id);
        $comment->validate = true;
        $comment->save();
        return redirect()->back();
    }

    public function affichageComment()
    {
        $comment = Comment::all();
        return view("admin.commentaire.index", compact("comment"));
    }
}
