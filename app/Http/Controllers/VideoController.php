<?php

namespace App\Http\Controllers;


use App\Models\Mediavideo;
use Illuminate\Http\Request;
use App\Models\CategoryVideo;

class VideoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $videos=Mediavideo::all();
        $categories=CategoryVideo::all();


        return view('video')->with([
            'videos'=>$videos,
            'categories'=>$categories

        ]);
    }
}