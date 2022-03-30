<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HimaraPicture;
use Illuminate\Support\Facades\Storage;

class HimaraPictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Himara = HimaraPicture::all();
        return view('himara.index', compact('Himara'));
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
     * @param  \App\Models\HimaraPicture  $himaraPicture
     * @return \Illuminate\Http\Response
     */
    public function show(HimaraPicture $himaraPicture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HimaraPicture  $himaraPicture
     * @return \Illuminate\Http\Response
     */
    public function edit(HimaraPicture $himaraPicture)
    {
        return view('admin.himara.edit', compact('himaraPicture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HimaraPicture  $himaraPicture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HimaraPicture $himaraPicture)
    {
        $request->validate([
            'url' => ['required']
        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($himaraPicture->url)) {
                Storage::disk('public')->delete($himaraPicture->url);
            }
            $image = Storage::disk('public')->put('', $request->image);
            $himaraPicture->url = $image;
        }
        $himaraPicture->save();
        return redirect()->route('himaraPicture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HimaraPicture  $himaraPicture
     * @return \Illuminate\Http\Response
     */
    public function destroy(HimaraPicture $himaraPicture)
    {
        //
    }
}
