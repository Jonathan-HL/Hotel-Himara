<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function edit(Video $video)
    {
        $video = Video::first();
        return view("admin.video.edit", compact("video"));
        // return view("admin.video.edit");
    }

    public function update(Request $request)
    {
        $request->validate([
            'url' => ['required','url']
        ]);
        $video = Video::first();
        $video->url = $request->url;
        $video->save();
        // return back()->with('success', 'video ' . $request->url .'(url) bien modifiée !');
        return back()->with('success', 'video' . $request->url .'(url) bien modifiée !');
    }
}
