<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\SendContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contact.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->validate([
        'name'=>['string','required','max:50'],
        'email'=>['email','required'],
        'subject'=>['string','required','max:60'],
        'phone'=>['required','string','min:8'],
        'message'=>['required','min:10','string'],
        'accepted'=>['required','string']
       ]);
       Contact::create($data);
       //Mail::to($request->email)->send(new SendContactMessage($request->name,$request->subject));
       return redirect()->back()->with('success','succès');
    }

   
}