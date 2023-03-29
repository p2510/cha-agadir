<?php

namespace App\Http\Controllers;

use App\Models\Mention;
use Illuminate\Http\Request;

class MentionController extends Controller
{
    public function __invoke(Request $request)
    {
        $datas=Mention::latest('id')->limit(1)->get();
      
        return view('mention')->with(['datas'=>$datas]);
    }
}