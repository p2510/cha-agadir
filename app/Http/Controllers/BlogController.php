<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Whyus;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=DB::table('blogs')->select('blogs.*')->get();
        return view('blog.index')->with(['blogs'=>$blogs]);
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs=Blog::findOrFail($id);
        $categories=CategoryBlog::all();
        $latests=DB::table('blogs')->limit(3)->orderBy('created_at')->get()->map(function($item,$key){
             $item->description=substr($item->description,0,60);
             return $item;
        });
        
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
        $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();   
             
        $evenements=DB::table('evenements')->orderBy('created_at','Desc')->limit(3)->get();
        $whyus=Whyus::all()->map(function ($item){
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
                $item->description=$item->description_en;
                }
                return $item;
            });

        return view('blog.show')->with(['blogs'=>$blogs,'categories'=>$categories,'latests'=>$latests,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'evenements'=>$evenements,'whyus'=> $whyus]);
    }

 


}