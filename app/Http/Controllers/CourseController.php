<?php

namespace App\Http\Controllers; 

use Carbon\Carbon;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Design;
use App\Models\Timing;
use App\Models\Program;
use App\Models\Download;
use App\Http\Utils\Levels;
use App\Models\Curriculum;
use App\Models\Coursevideo;
use Illuminate\Http\Request;
use App\Http\Utils\Countries;
use App\Http\Utils\Provinces;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $degrees=Degree::all();
        $courses=DB::table('courses')->join('modalities','modalities.id','=','courses.modality_id')
        ->join('degrees','degrees.id','=','courses.degree_id')
        ->join('languages','languages.id','=','courses.language_id')
        ->join('modes','modes.id','=','courses.mode_id')
        ->leftjoin('responsables','responsables.id','=','courses.responsable_id')
        ->select('courses.*','modalities.name as modalitiy_name','degrees.name as degrees_name','degrees.name_en as degrees_name_en','responsables.surname as responsables_surname','languages.name as languages_name','modes.name as modes_name','responsables.photo as responsables_photo')
        ->orderBy('courses.position','Asc')
        ->get();
        
        
        foreach ($courses as $key => $item) {
            $item->datelimite=Carbon::parse($item->datelimite)->toObject();
            $item->description=substr($item->description,0,200);    
           
            if (App::isLocale('en')) {
              $item->accroche=$item->accroche_en;
              $item->degrees_name=$item->degrees_name_en;
            }
          
             
        } 
        
        return view('courses.index')->with([
            'courses'=>$courses,
            'degrees'=>$degrees,
        ]);
        

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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
    
        $val=$course->where('courses.id',$course->id)->join('modalities','modalities.id','=','courses.modality_id')
        ->join('degrees','degrees.id','=','courses.degree_id')
        ->join('languages','languages.id','=','courses.language_id')
        ->join('modes','modes.id','=','courses.mode_id')
        ->leftjoin('responsables','responsables.id','=','courses.responsable_id')
        ->select('courses.*','modalities.name as modalitiy_name','modalities.name_en as modalitiy_name_en','degrees.name as degrees_name','degrees.name_en as degrees_name_en','responsables.surname as responsables_surname','languages.name as languages_name','modes.name as modes_name','responsables.name as responsables_name')
        ->get();
        foreach ($val as $key => $item) {
            Carbon::parse($item->datelimite)->locale('FR_fr')->diffForHumans();
            if (App::isLocale('en')) {
              $item->name=$item->name_en;            
              $item->description=$item->description_en;
              $item->accroche=$item->accroche_en;            
              $item->admission=$item->admission_en;            
              $item->dossier=$item->dossier_en;            
              $item->candidature=$item->candidature_en;            
              $item->selection=$item->selection_en;            
              $item->grade=$item->grade_en;            
              $item->profile=$item->profile_en;            
              $item->opportunity=$item->opportunity_en;            
              $item->review=$item->review_en;            
              $item->modalitiy_name=$item->modalitiy_name_en;
              $item->degrees_name=$item->degrees_name_en;
          }
        }
       

        $programs=Program::where('course_id',$course->id)->get()
        ->map(function ($item){
          if (App::isLocale('en')) {
              $item->title=$item->title_en;
              $item->description=$item->description_en;
          }
          return $item;
        });
        $downloads=Download::where('course_id',$course->id)->get()->map(function ($item){         
          if (App::isLocale('en')) {
              $item->name=$item->name_en;
          }
          return $item;
         });
         $coursevideos=Coursevideo::where('course_id',$course->id)->get()->map(function ($item){         
          if (App::isLocale('en')) {
              $item->title=$item->title_en;
          }
          return $item;
         });
        $degrees=Degree::all();
        $design=Design::first();
        
        
        $last_courses= $course->join('modalities','modalities.id','=','courses.modality_id')
        ->select('courses.name','courses.id','modalities.name as modalitiy_name')
        ->orderByDesc('courses.created_at')
        ->limit(3)->get();
        
        $countries= [
            "Maroc",
             "Afghanistan",
             "Afrique du Sud",
             "Albanie",
             "Algérie",
             "Allemagne",
             "Andorre",
             "Angola",
             "Anguilla",
             "Antarctique",
             "Antigua-et-Barbuda",
             "Antilles néerlandaises",
             "Arabie saoudite",
             "Argentine",
             "Arménie",
             "Aruba",
             "Australie",
             "Autriche",
             "Azerbaïdjan",
             "Bahamas",
             "Bahreïn",
             "Bangladesh",
             "Barbade",
             "Bélarus",
             "Belgique",
             "Belize",
             "Bénin",
             "Bermudes",
            "Bhoutan",
            "Bolivie",
            "Bosnie-Herzégovine",
            "Botswana",
            "Brésil",
            "Brunéi Darussalam",
            "Bulgarie",
            "Burkina Faso",
            "Burundi",
            "Cambodge",
            "Cameroun",
            "Canada",
            "Cap-Vert",
            "Ceuta et Melilla",
            "Chili",
            "Chine",
            "Chypre",
            "Colombie",
            "Comores",
            "Congo-Brazzaville",
            "Corée du Nord",
            "Corée du Sud",
            "Costa Rica",
            "Croatie",
            "Côte d’Ivoire",
            "Cuba",
            "Danemark",
            "Diego Garcia",
            "Djibouti",
            "Dominique",
            "Égypte",
            "El Salvador",
            "Émirats arabes unis",
            "Équateur",
            "Érythrée",
            "Espagne",
            "Estonie",
            "État de la Cité du Vatican",
            "États fédérés de Micronésie",
            "États-Unis",
            "Éthiopie",
            "Fidji",
            "Finlande",
            "France",
            "Gabon",
            "Gambie",
            "Géorgie",
            "Géorgie du Sud et les îles Sandwich du Sud",
            "Ghana",
            "Gibraltar",
            "Grèce",
            "Grenade",
            "Groenland",
            "Guadeloupe",
            "Guam",
            "Guatemala",
            "Guernesey",
            "Guinée",
            "Guinée équatoriale",
            "Guinée-Bissau",
            "Guyana",
            "Guyane française",
            "Haïti",
            "Honduras",
            "Hongrie",
            "Île Bouvet",
            "Île Christmas",
            "Île Clipperton",
            "Île de l'Ascension",
            "Île de Man",
            "Île Norfolk",
            "Îles Åland",
            "Îles Caïmans",
            "Îles Canaries",
            "Îles Cocos - Keeling",
            "Îles Cook",
            "Îles Féroé",
            "Îles Heard et MacDonald",
            "Îles Malouines",
            "Îles Mariannes du Nord",
            "Îles Marshall",
            "Îles Mineures Éloignées des États-Unis",
            "Îles Salomon",
            "Îles Turks et Caïques",
            "Îles Vierges britanniques",
            "Îles Vierges des États-Unis",
            "Inde",
            "Indonésie",
            "Irak",
            "Iran",
            "Irlande",
            "Islande",
            "Israël",
            "Italie",
            "Jamaïque",
            "Japon",
            "Jersey",
            "Jordanie",
            "Kazakhstan",
            "Kenya",
            "Kirghizistan",
            "Kiribati",
            "Koweït",
            "Laos",
            "Lesotho",
            "Lettonie",
            "Liban",
            "Libéria",
            "Libye",
            "Liechtenstein",
            "Lituanie",
            "Luxembourg",
            "Macédoine",
            "Madagascar",
            "Malaisie",
            "Malawi",
            "Maldives",
            "Mali",
            "Malte",
            "Martinique",
            "Maurice",
            "Mauritanie",
            "Mayotte",
            "Mexique",
            "Moldavie",
            "Monaco",
            "Mongolie",
            "Monténégro",
            "Montserrat",
            "Mozambique",
            "Myanmar",
            "Namibie",
            "Nauru",
            "Népal",
            "Nicaragua",
            "Niger",
            "Nigéria",
            "Niue",
            "Norvège",
            "Nouvelle-Calédonie",
            "Nouvelle-Zélande",
            "Oman",
            "Ouganda",
            "Ouzbékistan",
            "Pakistan",
            "Palaos",
            "Panama",
            "Papouasie-Nouvelle-Guinée",
            "Paraguay",
            "Pays-Bas",
            "Pérou",
            "Philippines",
            "Pitcairn",
            "Pologne",
            "Polynésie française",
            "Porto Rico",
            "Portugal",
            "Qatar",
            "R.A.S. chinoise de Hong Kong",
            "R.A.S. chinoise de Macao",
            "régions éloignées de l’Océanie",
            "République centrafricaine",
            "République démocratique du Congo",
            "République dominicaine",
            "République tchèque",
            "Réunion",
            "Roumanie",
            "Royaume-Uni",
            "Russie",
            "Rwanda",
            "Saint-Barthélémy",
            "Saint-Kitts-et-Nevis",
            "Saint-Marin",
            "Saint-Martin",
            "Saint-Pierre-et-Miquelon",
            "Saint-Vincent-et-les Grenadines",
            "Sainte-Hélène",
            "Sainte-Lucie",
            "Samoa",
            "Samoa américaines",
            "Sao Tomé-et-Principe",
            "Sénégal",
            "Serbie",
            "Serbie-et-Monténégro",
            "Seychelles",
            "Sierra Leone",
            "Singapour",
            "Slovaquie",
            "Slovénie",
            "Somalie",
            "Soudan",
            "Sri Lanka",
            "Suède",
            "Suisse",
            "Suriname",
            "Svalbard et Île Jan Mayen",
            "Swaziland",
            "Syrie",
            "Tadjikistan",
            "Taïwan",
            "Tanzanie",
            "Tchad",
            "Terres australes françaises",
            "Territoire britannique de l'océan Indien",
            "Territoire palestinien",
            "Thaïlande",
            "Timor oriental",
            "Togo",
            "Tokelau",
            "Tonga",
            "Trinité-et-Tobago",
            "Tristan da Cunha",
            "Tunisie",
            "Turkménistan",
            "Turquie",
            "Tuvalu",
            "Ukraine",
            "Union européenne",
            "Uruguay",
            "Vanuatu",
            "Venezuela",
            "Viêt Nam",
            "Wallis-et-Futuna",
            "Yémen",
            "Zambie",
            "Zimbabwe"
         ];
       
         $provinces= [
        
            "Al Haouz"
           ,
           
             "Al Hoceima"
           ,
           
            "Aousserd​"
           ,
           
             "Assa-Zag"
           ,
           
           "Azilal"
           ,
           
             "Béni Mellal"
           ,
           
             "Benslimane"
           ,
           
             "Berkan"
           ,
           
             "Berrechid"
           ,
           
             "Boujdour"
           ,
           
             "Boulemane"
           ,
           
             "Casablanca"
           ,
           
             "Chefchaouen"
           ,
           
             "Chichaoua"
           ,
           
             "Chtouka-Aït Baha"
           ,
           
             "Driouch"
           ,
           
             "El Hajeb"
           ,
           
            "El Jadida"
           ,
           
            "Errachidia"
           ,
           
            "Es-Semara​"
           ,
           
            "Essaouira"
           ,
           
             "Fahs-Anjra"
           ,
           
            "Fès"
           ,
           
             "Figuig"
           ,
           
             "Fquih Ben Salah"
           ,
           
            "Guelmim"
           ,
           
             "Guercif"
           ,
           
             "Ifrane"
           ,
           
             "Inezgane-Aït Melloul"
           ,
           
            "Jerada"
           ,
           
             "Kelâa des Sraghna"
           ,
           
             "Kénitra"
           ,
           
            "Khémisset"
           ,
           
            "Khénifra"
           ,
           
             "Khouribga​"
           ,
           
             "Laâyoune"
           ,
           
             "Larache"
           ,
           
            "M'diq-Fnideq"
           ,
           
             "Marrakech"
           ,
           
            "Médiouna"
           ,
           
           "Meknès"
           ,
           
           "Midelt"
           ,
           
           "Mohammadia"
           ,
           
           "Moulay Yacoub"
           ,
           
           "Nador"
           ,
           
           "Nouaceur"
           ,
           
           "Ouarzazate"
           ,
           
           "Ouazzane"
           ,
           
           "Oued Ed-Dahab"
           ,
           
           "Oujda-Angad"
           ,
           
           "Rabat"
           ,
           
           "Rehamna"
           ,
           
           "Safi"
           ,
           
           "Salé"
           ,
           
           "Sefrou"
           ,
           
           "Settat"
           ,
           
           "Sidi Bennour"
           ,
           
           "Sidi Ifni"
           ,
           
           "Sidi Kacem"
           ,
           
           "Sidi Slimane"
           ,
           
           "Skhirate-Témara"
           ,
           
            "Tan-Tan"
           ,
           
           "Tanger-Assilah"
           ,
           
           "Taounate"
           ,
           
           "Taourirt"
           ,
           
           "Tarfaya"
           ,
           
           "Taroudannt"
           ,
           
           "Tata"
           ,
           
           "Taza"
           ,
           
           "Tétouan"
           ,
           
           "Tinghir"
           ,
           
           "Tiznit"
           ,
           
           "Youssoufia"
           ,
           
           "Zagora​"
           ,
           
           "Autre"
           
       ];
       
       $levels=Curriculum::all();

         return view('courses.details')->with([
            'courses'=>$val,
            'programs'=> $programs, 
            'downloads'=> $downloads, 
            'degrees'=>$degrees,
            'last_courses'=>$last_courses,
            'countries'=>$countries,
            'provinces'=>$provinces,
            'levels'=>$levels,
            'design'=>$design,
            'coursevideos'=> $coursevideos

        ]);

        
    }
    
    public function showByName(string $res)
    {
    
      $programs=[];
      $downloads=[];
      $degrees=[];
      $last_courses=[];
      $countries=[];
      $levels=[];
      $provinces=[];
      $val=[];
      $design=Design::first();

      

      $val=DB::table('courses')->where('courses.name',$res)->join('modalities','modalities.id','=','courses.modality_id')
      ->join('degrees','degrees.id','=','courses.degree_id')
      ->join('languages','languages.id','=','courses.language_id')
      ->join('modes','modes.id','=','courses.mode_id')
      ->join('locations','locations.id','=','courses.location_id')
      ->leftjoin('responsables','responsables.id','=','courses.responsable_id')
      ->select('courses.*','modalities.name as modalitiy_name','locations.name as locations_name','degrees.name as degrees_name','responsables.surname as responsables_surname','languages.name as languages_name','modes.name as modes_name','responsables.name as responsables_name')
      ->get();




      if (count($val)>0) {
      
      foreach ($val as $key => $item) {
          Carbon::parse($item->datelimite)->locale('FR_fr')->diffForHumans();
      }
      $programs=Program::where('course_id',$val[0]->id)->get();
      $downloads=Download::where('course_id',$val[0]->id)->get()->map(function ($item){         
        if (App::isLocale('en')) {
            $item->name=$item->name_en;
        }
        return $item;
       });
      $degrees=Degree::all();
      
      $last_courses= DB::table('courses')->join('modalities','modalities.id','=','courses.modality_id')
      ->select('courses.name','courses.id','modalities.name as modalitiy_name')
      ->orderByDesc('courses.created_at')
      ->limit(3)->get();
    
      $countries= [
          "Maroc",
           "Afghanistan",
           "Afrique du Sud",
           "Albanie",
           "Algérie",
           "Allemagne",
           "Andorre",
           "Angola",
           "Anguilla",
           "Antarctique",
           "Antigua-et-Barbuda",
           "Antilles néerlandaises",
           "Arabie saoudite",
           "Argentine",
           "Arménie",
           "Aruba",
           "Australie",
           "Autriche",
           "Azerbaïdjan",
           "Bahamas",
           "Bahreïn",
           "Bangladesh",
           "Barbade",
           "Bélarus",
           "Belgique",
           "Belize",
           "Bénin",
           "Bermudes",
          "Bhoutan",
          "Bolivie",
          "Bosnie-Herzégovine",
          "Botswana",
          "Brésil",
          "Brunéi Darussalam",
          "Bulgarie",
          "Burkina Faso",
          "Burundi",
          "Cambodge",
          "Cameroun",
          "Canada",
          "Cap-Vert",
          "Ceuta et Melilla",
          "Chili",
          "Chine",
          "Chypre",
          "Colombie",
          "Comores",
          "Congo-Brazzaville",
          "Corée du Nord",
          "Corée du Sud",
          "Costa Rica",
          "Croatie",
          "Côte d’Ivoire",
          "Cuba",
          "Danemark",
          "Diego Garcia",
          "Djibouti",
          "Dominique",
          "Égypte",
          "El Salvador",
          "Émirats arabes unis",
          "Équateur",
          "Érythrée",
          "Espagne",
          "Estonie",
          "État de la Cité du Vatican",
          "États fédérés de Micronésie",
          "États-Unis",
          "Éthiopie",
          "Fidji",
          "Finlande",
          "France",
          "Gabon",
          "Gambie",
          "Géorgie",
          "Géorgie du Sud et les îles Sandwich du Sud",
          "Ghana",
          "Gibraltar",
          "Grèce",
          "Grenade",
          "Groenland",
          "Guadeloupe",
          "Guam",
          "Guatemala",
          "Guernesey",
          "Guinée",
          "Guinée équatoriale",
          "Guinée-Bissau",
          "Guyana",
          "Guyane française",
          "Haïti",
          "Honduras",
          "Hongrie",
          "Île Bouvet",
          "Île Christmas",
          "Île Clipperton",
          "Île de l'Ascension",
          "Île de Man",
          "Île Norfolk",
          "Îles Åland",
          "Îles Caïmans",
          "Îles Canaries",
          "Îles Cocos - Keeling",
          "Îles Cook",
          "Îles Féroé",
          "Îles Heard et MacDonald",
          "Îles Malouines",
          "Îles Mariannes du Nord",
          "Îles Marshall",
          "Îles Mineures Éloignées des États-Unis",
          "Îles Salomon",
          "Îles Turks et Caïques",
          "Îles Vierges britanniques",
          "Îles Vierges des États-Unis",
          "Inde",
          "Indonésie",
          "Irak",
          "Iran",
          "Irlande",
          "Islande",
          "Israël",
          "Italie",
          "Jamaïque",
          "Japon",
          "Jersey",
          "Jordanie",
          "Kazakhstan",
          "Kenya",
          "Kirghizistan",
          "Kiribati",
          "Koweït",
          "Laos",
          "Lesotho",
          "Lettonie",
          "Liban",
          "Libéria",
          "Libye",
          "Liechtenstein",
          "Lituanie",
          "Luxembourg",
          "Macédoine",
          "Madagascar",
          "Malaisie",
          "Malawi",
          "Maldives",
          "Mali",
          "Malte",
          "Martinique",
          "Maurice",
          "Mauritanie",
          "Mayotte",
          "Mexique",
          "Moldavie",
          "Monaco",
          "Mongolie",
          "Monténégro",
          "Montserrat",
          "Mozambique",
          "Myanmar",
          "Namibie",
          "Nauru",
          "Népal",
          "Nicaragua",
          "Niger",
          "Nigéria",
          "Niue",
          "Norvège",
          "Nouvelle-Calédonie",
          "Nouvelle-Zélande",
          "Oman",
          "Ouganda",
          "Ouzbékistan",
          "Pakistan",
          "Palaos",
          "Panama",
          "Papouasie-Nouvelle-Guinée",
          "Paraguay",
          "Pays-Bas",
          "Pérou",
          "Philippines",
          "Pitcairn",
          "Pologne",
          "Polynésie française",
          "Porto Rico",
          "Portugal",
          "Qatar",
          "R.A.S. chinoise de Hong Kong",
          "R.A.S. chinoise de Macao",
          "régions éloignées de l’Océanie",
          "République centrafricaine",
          "République démocratique du Congo",
          "République dominicaine",
          "République tchèque",
          "Réunion",
          "Roumanie",
          "Royaume-Uni",
          "Russie",
          "Rwanda",
          "Saint-Barthélémy",
          "Saint-Kitts-et-Nevis",
          "Saint-Marin",
          "Saint-Martin",
          "Saint-Pierre-et-Miquelon",
          "Saint-Vincent-et-les Grenadines",
          "Sainte-Hélène",
          "Sainte-Lucie",
          "Samoa",
          "Samoa américaines",
          "Sao Tomé-et-Principe",
          "Sénégal",
          "Serbie",
          "Serbie-et-Monténégro",
          "Seychelles",
          "Sierra Leone",
          "Singapour",
          "Slovaquie",
          "Slovénie",
          "Somalie",
          "Soudan",
          "Sri Lanka",
          "Suède",
          "Suisse",
          "Suriname",
          "Svalbard et Île Jan Mayen",
          "Swaziland",
          "Syrie",
          "Tadjikistan",
          "Taïwan",
          "Tanzanie",
          "Tchad",
          "Terres australes françaises",
          "Territoire britannique de l'océan Indien",
          "Territoire palestinien",
          "Thaïlande",
          "Timor oriental",
          "Togo",
          "Tokelau",
          "Tonga",
          "Trinité-et-Tobago",
          "Tristan da Cunha",
          "Tunisie",
          "Turkménistan",
          "Turquie",
          "Tuvalu",
          "Ukraine",
          "Union européenne",
          "Uruguay",
          "Vanuatu",
          "Venezuela",
          "Viêt Nam",
          "Wallis-et-Futuna",
          "Yémen",
          "Zambie",
          "Zimbabwe"
       ];
      $provinces= [
      
          "Al Haouz"
         ,
         
           "Al Hoceima"
         ,
         
          "Aousserd​"
         ,
         
           "Assa-Zag"
         ,
         
         "Azilal"
         ,
         
           "Béni Mellal"
         ,
         
           "Benslimane"
         ,
         
           "Berkan"
         ,
         
           "Berrechid"
         ,
         
           "Boujdour"
         ,
         
           "Boulemane"
         ,
         
           "Casablanca"
         ,
         
           "Chefchaouen"
         ,
         
           "Chichaoua"
         ,
         
           "Chtouka-Aït Baha"
         ,
         
           "Driouch"
         ,
         
           "El Hajeb"
         ,
         
          "El Jadida"
         ,
         
          "Errachidia"
         ,
         
          "Es-Semara​"
         ,
         
          "Essaouira"
         ,
         
           "Fahs-Anjra"
         ,
         
          "Fès"
         ,
         
           "Figuig"
         ,
         
           "Fquih Ben Salah"
         ,
         
          "Guelmim"
         ,
         
           "Guercif"
         ,
         
           "Ifrane"
         ,
         
           "Inezgane-Aït Melloul"
         ,
         
          "Jerada"
         ,
         
           "Kelâa des Sraghna"
         ,
         
           "Kénitra"
         ,
         
          "Khémisset"
         ,
         
          "Khénifra"
         ,
         
           "Khouribga​"
         ,
         
           "Laâyoune"
         ,
         
           "Larache"
         ,
         
          "M'diq-Fnideq"
         ,
         
           "Marrakech"
         ,
         
          "Médiouna"
         ,
         
         "Meknès"
         ,
         
         "Midelt"
         ,
         
         "Mohammadia"
         ,
         
         "Moulay Yacoub"
         ,
         
         "Nador"
         ,
         
         "Nouaceur"
         ,
         
         "Ouarzazate"
         ,
         
         "Ouazzane"
         ,
         
         "Oued Ed-Dahab"
         ,
         
         "Oujda-Angad"
         ,
         
         "Rabat"
         ,
         
         "Rehamna"
         ,
         
         "Safi"
         ,
         
         "Salé"
         ,
         
         "Sefrou"
         ,
         
         "Settat"
         ,
         
         "Sidi Bennour"
         ,
         
         "Sidi Ifni"
         ,
         
         "Sidi Kacem"
         ,
         
         "Sidi Slimane"
         ,
         
         "Skhirate-Témara"
         ,
         
          "Tan-Tan"
         ,
         
         "Tanger-Assilah"
         ,
         
         "Taounate"
         ,
         
         "Taourirt"
         ,
         
         "Tarfaya"
         ,
         
         "Taroudannt"
         ,
         
         "Tata"
         ,
         
         "Taza"
         ,
         
         "Tétouan"
         ,
         
         "Tinghir"
         ,
         
         "Tiznit"
         ,
         
         "Youssoufia"
         ,
         
         "Zagora​"
         ,
         
         "Autre"
         
     ];
      $levels=[
          "Bac",
          "Bac+1",
          "Technicien",
        "Technicien spécialisé",
           "Bac+2/DUT/DEUG",
          "Bac+3/Licence",
           "Bac+4/Master 1",
          "Bac+5/Master 2",
         "MBA",
          "Ingénieur",
         "Doctorat",
        "Autres",
       ];
      }
     
   
       return view('courses.byname')->with([
          'courses'=>$val,
          'programs'=> $programs, 
          'downloads'=> $downloads, 
          'degrees'=>$degrees,
          'last_courses'=>$last_courses,
          'countries'=>$countries,
          'provinces'=>$provinces,
          'levels'=>$levels,
          'design'=>$design
      ]);
    }

 

}