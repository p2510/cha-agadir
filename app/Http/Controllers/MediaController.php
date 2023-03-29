<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\CategoryMedia;


class MediaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $medias=Media::all();
        $categories=CategoryMedia::all();
        return view('media')->with([
            'medias'=>$medias,
            'categories'=>$categories
        ]);
    }
}