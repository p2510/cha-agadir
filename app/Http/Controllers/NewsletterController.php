<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NewsletterController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'email'=>'email|required|unique:App\Models\Newsletter,email',
        ]);
        Newsletter::create($data);
        return redirect()->back()->with('successNewsletter','succès');
    }

    public function create(){
        return view('unsubscribe');
    }

    public function unsubscribe(Request $request){
        
        $allUser=Newsletter::all();
        $getAllEmail=[];
        foreach ($allUser as $key => $value) {
            $getAllEmail[]=$value->email;
        }
    
        $data=$request->validate([
            'email_newsletter'=>['email','required',Rule::in($getAllEmail)],
        ]);
     
        $user=Newsletter::where('email',$request->email_newsletter)->delete();
      
     
        
        return redirect()->route('home')->with('successUnsubscribe','succès');
        
    }
}