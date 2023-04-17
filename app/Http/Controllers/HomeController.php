<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use App\Models\Barre;

use App\Models\Popup;
use App\Models\Slide;
use App\Models\Whyus;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Partner;
use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

       
        
        $courses = DB::table('courses')->join('modalities','modalities.id','=','courses.modality_id')
        ->join('degrees','degrees.id','=','courses.degree_id')
        ->join('languages','languages.id','=','courses.language_id')
        ->leftjoin('responsables','responsables.id','=','courses.responsable_id')
        ->select('courses.*','modalities.name as modalitiy_name','modalities.name_en as modalitiy_name_en','degrees.name as degrees_name','degrees.name_en as degrees_name_en','degrees.id as degrees_id','languages.name as languages_name','responsables.photo as responsables_photo')
        ->orderBy('courses.position','Asc')
        ->get()->map(function ($item){
            if (App::isLocale('en')) {
                $item->accroche=$item->accroche_en;
               $item->degrees_name=$item->degrees_name_en;
                
            }
            return $item;
       });
        $slides=Slide::all();    
        $degrees=Degree::all();
        
        
        $responsables=DB::table('responsables')->limit(4)->get();
        foreach ($courses as $key => $course) {
            $course->datelimite=Carbon::parse($course->datelimite)->toObject();
            $course->description=substr($course->description,0,200);
        }
        //$evenements=DB::table('evenements')->whereDate('start_at','>=',Carbon::tomorrow())->orderBy('start_at','Asc')->limit(3)->get();
        $evenements=DB::table('evenements')->orderBy('start_at','Asc')->limit(3)->get();
        $blogs=DB::table('blogs')->orderBy('created_at','Desc')->limit(3)->get()->map(function($item,$key){
            $item->description=substr($item->description,0,60);
            return $item;
       });
       $popup=Popup::where('active',true)->limit(1)->get()->map(function ($item){
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
                $item->description=$item->description_en;
                
            }
            return $item;
       });
       $about=About::latest('id')->limit(1)->get();
       $whyus=Whyus::all();
       $barres=Barre::all();
       $partners=Partner::all();
        return  view('home')->with(['courses'=>$courses,'slides'=>$slides,'degrees'=>$degrees,'responsables'=>$responsables,'evenements'=>$evenements,'blogs'=>$blogs,'about'=>$about,'whyus'=> $whyus,'barres'=>$barres,'partners'=> $partners,'popup'=>$popup]);
    } 
}