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
        $responsables=DB::table('teams')->orderBy('name','asc')->paginate(8);
        return view('team.index_team')->with(['responsables'=>$responsables]);
    }
    public function index_professor()
    {
        $responsables=DB::table('responsables')->orderBy('name','asc')->paginate(8);
        return view('team.index_professor')->with(['responsables'=>$responsables]);
    }

    public function show_professor(Responsable $responsable)
    {
       
        return view('team.show_professor')->with(['responsable'=>$responsable]);

    }
}