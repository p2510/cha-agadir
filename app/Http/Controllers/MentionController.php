<?php

namespace App\Http\Controllers;

use App\Models\Mention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MentionController extends Controller
{
    public function __invoke(Request $request)
    {
        $datas=Mention::latest('id')->limit(1)->get()->map(function ($item){
            if (App::isLocale('en')) {
                $item->content=$item->content_en;
            }
            return $item;
       });
      
        return view('mention')->with(['datas'=>$datas]);
    }
}