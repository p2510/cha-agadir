<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Degree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Degree::all();

        return view('welcome',compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(string $res)
    {
        $getId=Degree::where('name',$res)->get('id');
        $courses=[];
        $degree_name='';
       // dd($getId[0]->id);
        
        if (count($getId)>0) {
            $courses=DB::table('courses')->where('courses.degree_id',$getId[0]->id)->join('modalities','modalities.id','=','courses.modality_id')
            ->join('degrees','degrees.id','=','courses.degree_id')
            ->join('languages','languages.id','=','courses.language_id')
            ->join('modes','modes.id','=','courses.mode_id')
            ->leftjoin('responsables','responsables.id','=','courses.responsable_id')
            ->select('courses.*','modalities.name as modalitiy_name','degrees.name as degrees_name','degrees.name_en as degrees_name_en','languages.name as languages_name','modes.name as modes_name','responsables.photo as responsables_photo','responsables.surname as responsables_surname')
            ->get();
           
       
            foreach ($courses as $key => $item) {
                $item->datelimite=Carbon::parse($item->datelimite)->toObject();
                $item->description=substr($item->description,0,200);
                 
                if (App::isLocale('en')) {
                  
                    $item->accroche=$item->accroche_en;
                    $item->degrees_name=$item->degrees_name_en;
                  }  
                $degree_name =$item->degrees_name;
            } 
        }
  
  
        
        return view('degree.show')->with([
            'courses'=>$courses,
            'degrees_name'=>$degree_name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        //
    }
}