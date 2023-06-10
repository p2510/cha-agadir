<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Coursevideo;
use App\Models\Curriculum;
use App\Models\Degree;
use App\Models\Design;
use App\Models\Download;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $degrees = Degree::all();
        $courses = DB::table('courses')->join('modalities', 'modalities.id', '=', 'courses.modality_id')
            ->join('degrees', 'degrees.id', '=', 'courses.degree_id')
            ->join('languages', 'languages.id', '=', 'courses.language_id')
            ->join('modes', 'modes.id', '=', 'courses.mode_id')
            ->leftjoin('responsables', 'responsables.id', '=', 'courses.responsable_id')
            ->select('courses.*', 'modalities.name as modalitiy_name', 'degrees.name as degrees_name', 'degrees.name_en as degrees_name_en', 'responsables.surname as responsables_surname', 'languages.name as languages_name', 'modes.name as modes_name', 'responsables.photo as responsables_photo')
            ->orderBy('courses.position', 'Asc')
            ->get();

        foreach ($courses as $key => $item) {
            $item->datelimite = Carbon::parse($item->datelimite)->toObject();
            $item->description = substr($item->description, 0, 200);

            if (App::isLocale('en')) {
                $item->accroche = $item->accroche_en;
                $item->degrees_name = $item->degrees_name_en;
            }

        }

        return view('courses.index')->with([
            'courses' => $courses,
            'degrees' => $degrees,
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

        $val = $course->where('courses.id', $course->id)->join('modalities', 'modalities.id', '=', 'courses.modality_id')
            ->join('degrees', 'degrees.id', '=', 'courses.degree_id')
            ->join('languages', 'languages.id', '=', 'courses.language_id')
            ->join('modes', 'modes.id', '=', 'courses.mode_id')
            ->leftjoin('responsables', 'responsables.id', '=', 'courses.responsable_id')
            ->leftjoin('teams', 'teams.id', '=', 'courses.team_id')
            ->select('courses.*', 'modalities.name as modalitiy_name', 'modalities.name_en as modalitiy_name_en', 'degrees.name as degrees_name', 'degrees.name_en as degrees_name_en', 'responsables.surname as responsables_surname', 'teams.surname as teams_surname','responsables.photo as responsables_photo', 'teams.photo as teams_photo', 'languages.name as languages_name', 'modes.name as modes_name', 'responsables.name as responsables_name', 'teams.name as teams_name')
            ->get();
            
        foreach ($val as $key => $item) {
            Carbon::parse($item->datelimite)->locale('FR_fr')->diffForHumans();
            if (App::isLocale('en')) {
                $item->name = $item->name_en;
                $item->description = $item->description_en;
                $item->accroche = $item->accroche_en;
                $item->admission = $item->admission_en;
                $item->dossier = $item->dossier_en;
                $item->candidature = $item->candidature_en;
                $item->selection = $item->selection_en;
                $item->grade = $item->grade_en;
                $item->profile = $item->profile_en;
                $item->opportunity = $item->opportunity_en;
                $item->review = $item->review_en;
                $item->modalitiy_name = $item->modalitiy_name_en;
                $item->degrees_name = $item->degrees_name_en;
            }
        }

        $programs = Program::where('course_id', $course->id)->get()
            ->map(function ($item) {
                if (App::isLocale('en')) {
                    $item->title = $item->title_en;
                    $item->description = $item->description_en;
                }
                return $item;
            });
        $downloads = Download::where('course_id', $course->id)->get()->map(function ($item) {
            if (App::isLocale('en')) {
                $item->name = $item->name_en;
            }
            return $item;
        });
        $coursevideos = Coursevideo::where('course_id', $course->id)->get()->map(function ($item) {
            if (App::isLocale('en')) {
                $item->title = $item->title_en;
            }
            return $item;
        });
        $degrees = Degree::all();
        $design = Design::first();

        $last_courses = $course->join('modalities', 'modalities.id', '=', 'courses.modality_id')
            ->select('courses.name', 'courses.id', 'modalities.name as modalitiy_name')
            ->orderByDesc('courses.created_at')
            ->limit(3)->get();

        $countries = ["Morocco", "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua &amp; Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia &amp; Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Cape Verde", "Cayman Islands", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cruise Ship", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kuwait", "Kyrgyz Republic", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Mozambique", "Namibia", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre &amp; Miquelon", "Samoa", "San Marino", "Satellite", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sri Lanka", "St Kitts &amp; Nevis", "St Lucia", "St Vincent", "St. Lucia", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad &amp; Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks &amp; Caicos", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "Uzbekistan", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];
        $provinces = [

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

            "Autre",

        ];
        $levels = Curriculum::all();

        return view('courses.details')->with([
            'courses' => $val,
            'programs' => $programs,
            'downloads' => $downloads,
            'degrees' => $degrees,
            'last_courses' => $last_courses,
            'countries' => $countries,
            'provinces' => $provinces,
            'levels' => $levels,
            'design' => $design,
            'coursevideos' => $coursevideos,

        ]);

    }

    public function showByName(string $res)
    {

        $programs = [];
        $downloads = [];
        $degrees = [];
        $last_courses = [];
        $countries = [];
        $levels = [];
        $provinces = [];
        $val = [];
        $design = Design::first();

        $val = DB::table('courses')->where('courses.name', $res)->join('modalities', 'modalities.id', '=', 'courses.modality_id')
            ->join('degrees', 'degrees.id', '=', 'courses.degree_id')
            ->join('languages', 'languages.id', '=', 'courses.language_id')
            ->join('modes', 'modes.id', '=', 'courses.mode_id')
            ->join('locations', 'locations.id', '=', 'courses.location_id')
            ->leftjoin('responsables', 'responsables.id', '=', 'courses.responsable_id')
            ->leftjoin('teams', 'teams.id', '=', 'courses.team_id')
            ->select('courses.*', 'modalities.name as modalitiy_name', 'locations.name as locations_name', 'degrees.name as degrees_name', 'responsables.surname as responsables_surname', 'teams.surname as teams_surname','responsables.photo as responsables_photo', 'teams.photo as teams_photo','languages.name as languages_name', 'modes.name as modes_name', 'responsables.name as responsables_name','teams.name as teams_name')
            ->get();

        if (count($val) > 0) {

            foreach ($val as $key => $item) {
                Carbon::parse($item->datelimite)->locale('FR_fr')->diffForHumans();
            }
            $programs = Program::where('course_id', $val[0]->id)->get();
            $downloads = Download::where('course_id', $val[0]->id)->get()->map(function ($item) {
                if (App::isLocale('en')) {
                    $item->name = $item->name_en;
                }
                return $item;
            });
            $degrees = Degree::all();
            $coursevideos = Coursevideo::where('course_id', $course->id)->get()->map(function ($item) {
                if (App::isLocale('en')) {
                    $item->title = $item->title_en;
                }
                return $item;
            });

            $last_courses = DB::table('courses')->join('modalities', 'modalities.id', '=', 'courses.modality_id')
                ->select('courses.name', 'courses.id', 'modalities.name as modalitiy_name')
                ->orderByDesc('courses.created_at')
                ->limit(3)->get();

            $countries = ["Morocco", "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua &amp; Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia &amp; Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Cape Verde", "Cayman Islands", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cruise Ship", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kuwait", "Kyrgyz Republic", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Mozambique", "Namibia", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre &amp; Miquelon", "Samoa", "San Marino", "Satellite", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sri Lanka", "St Kitts &amp; Nevis", "St Lucia", "St Vincent", "St. Lucia", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad &amp; Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks &amp; Caicos", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "Uzbekistan", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];

            $provinces = [

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

                "Autre",

            ];
            $levels = [
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
            'courses' => $val,
            'programs' => $programs,
            'downloads' => $downloads,
            'degrees' => $degrees,
            'last_courses' => $last_courses,
            'countries' => $countries,
            'provinces' => $provinces,
            'levels' => $levels,
            'design' => $design,
            'coursevideos' => $coursevideos,
        ]);
    }

}