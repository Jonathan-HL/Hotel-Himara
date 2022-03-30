<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affichage()
    {

        $userAll = User::all();
        return view("admin.user.index", compact("userAll"));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $roles = Role::all();
        return view("admin.user.edit", compact("roles", "user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'profil' => 'required',
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
        ]);

        // $user->profil = $request->profil;
        $user = User::find($id);
        if ($request->profil) {
            $filename = Storage::disk('public')->put('images/', $request->profil);
            $user->profil = $filename;
        } else {
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            $filename = Storage::disk('public')->put('images/' . $token, $fichierURL);
            $user->profil = $filename;
        }

        $user->name = $request->name;
        $user->email = $request->email;


        $user->role_id = $request->role_id;

        $user->save();
        return redirect()->route('user.index')->with('success', 'user' . $request->name .' bien modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
