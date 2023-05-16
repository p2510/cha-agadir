<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProfessorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $responsables=Responsable::all()->map(function ($item){
            if (App::isLocale('en')) {
                $item->statut=$item->statut_en;
                $item->poste=$item->poste_en;
                $item->departement=$item->departement_en;
                $item->competence=$item->competence_en;
                
            }
            return $item;
       });
        return view('professor')->with(['responsables'=>$responsables]);
    }
}