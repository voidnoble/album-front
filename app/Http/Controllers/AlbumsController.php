<?php

namespace App\Http\Controllers;

use App\Album;
use Laravel\Lumen\Routing\Controller as BaseController;

class AlbumsController extends BaseController
{
    private $albumUrl = "";

    public function __construct()
    {
        $this->albumUrl = (env("APP_ENV") == "production")? "http://albums.motorgraph.com" : "http://albums.motorgraph.local";
    }

    public function index()
    {
        return "Albums index";
    }

    public function show($id)
    {
        $album = Album::with('Photos')->find($id);
        $album->url = $this->albumUrl;

        if ($album->Photos->count() < 1) {
            //return redirect("/");
        }

        $album->files = $album->Photos->sortBy('order');
        $tags = $album->tags;

        return view('show', [
            'album' => $album,
            'tags' => $tags
        ]);
    }
}
