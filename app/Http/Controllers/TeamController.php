<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class TeamController extends Controller
{
    public function index_team()
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
        return view('team.index_team')->with(['responsables'=>$responsables]);
    }
    public function index_professor()
    {
        $responsables=DB::table('responsables')->paginate(8)/*->map(function ($item){
            if (App::isLocale('en')) {
                $item->statut=$item->statut_en;
                $item->poste=$item->poste_en;
                $item->departement=$item->departement_en;
                $item->competence=$item->competence_en;
            }
            return $item;
       })*/;
        return view('team.index_professor')->with(['responsables'=>$responsables]);
    }

    public function show_professor(Responsable $responsable)
    {
       
        return view('team.show_professor')->with(['responsable'=>$responsable]);

    }
}