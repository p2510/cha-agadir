<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Degree;
use App\Http\Utils\Levels;
use App\Models\Interested;
use Illuminate\Http\Request;
use App\Http\Utils\Countries;
use App\Http\Utils\Provinces;
use Illuminate\Validation\Rule;
use App\Jobs\JobMessageInterested;
use App\Mail\SendMessageInterested;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;


class InterestedController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function __invoke(Request $request ,int $id)
    {
        
    $getCourse=Course::find($id);
    $getDegree= Degree::find($getCourse->degree_id);

    
   $data=$request->validate([
            'gender'=>['required','string',Rule::in(['Mlle','Mme','Mr'])],
            'name'=>['required','string','max:50','min:2'],
            'surname'=>['required','string','max:100','min:2'],
            'email'=>['required','email'],
            'country'=>['required','string'],
            'province'=>['string'],
            'phone'=>['required','string'],
            'level'=>['required','string'],
            'grade'=>['string'],
            'degree_name'=>['string'],
            'accepted'=>['required','string'],
        ]);  

        $data['phone']='+'.$request->indice . ' | ' . $data['phone'];
       
        
        $data['course_id']=$id;
        $data['degree_name']=$getDegree->name;
        
        Interested::create($data);
        JobMessageInterested::dispatch($request->email, $getCourse->name, $getCourse->name_en,$getDegree->name,$getDegree->name_en,$request->name,$id);

        return redirect()->back()->with('success','succès');
    }
}