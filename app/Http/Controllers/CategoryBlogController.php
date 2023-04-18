<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class CategoryBlogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, int $id)
    {
    
        $blogs=DB::table('blogs')->where('category_blog_id',$id)->get()->map(function($item,$key){
            $item->description=substr($item->description,0,60);
            $item->created_at=Carbon::parse($item->created_at)->locale('FR_fr')->diffForHumans();
            if (App::isLocale('en')) {
                $item->accroche=$item->accroche_en;
                $item->title=$item->title_en;
                
            }
            return $item;
       });
        $categoryName=CategoryBlog::findOrFail($id);
        return view('categoryblog')->with(['blogs'=>$blogs,'categoryName'=>$categoryName]);
    }
}