<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\CategoryMedia;
use Illuminate\Support\Facades\App;


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
        $medias=Media::orderBy('created_at','desc')->get();
        $categories=CategoryMedia::all()->map(function ($item){
            if (App::isLocale('en')) {
                $item->name=$item->name_en;
                
            }
            return $item;
       });
        return view('media')->with([
            'medias'=>$medias,
            'categories'=>$categories
        ]);
    }
}