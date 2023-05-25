<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Models\Evenementpage;
use App\Models\Evenementvideo;
use Jorenvh\Share\ShareFacade;
use App\Jobs\JobMessageEvenement;
use App\Mail\SendMessageEvenement;
use Illuminate\Support\Facades\DB;
use App\Models\EvenementInterested;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements=DB::table('evenements')->orderBy('start_at','desc')->paginate(6);
        return view('evenement.index')->with(['evenements'=>$evenements]);
    }

    public function show(Evenement $evenement)
    {
         $data=Evenement::where('id',$evenement->id)->get()->map(function ($item){
          
          if (App::isLocale('en')) {
              $item->title=$item->title_en;
              $item->description=$item->description_en;
          }
          return $item;
         });

         $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
         $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
         $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();
         $evenementPages=Evenementpage::where('evenement_id',$evenement->id)->get()->map(function ($item){         
          if (App::isLocale('en')) {
              $item->filename=$item->filename_en;
          }
          return $item;
         });
         
         $evenementvideos=Evenementvideo::where('evenement_id',$evenement->id)->get()->map(function ($item){         
          if (App::isLocale('en')) {
              $item->title=$item->title_en;
          }
          return $item;
         });
         
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
         "régions éloignées de l'Océanie",
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
         

          return view('evenement.show')->with(['evenements'=>$data,'evenementPages'=>$evenementPages,'evenementvideos'=>$evenementvideos,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'countries'=>$countries,'provinces'=>$provinces]);
    }

    public function signIn($id,Request $request)
    {
      $data=$request->validate([
        'name'=>['required','string','max:150'],
        'activity'=>['required','string','min:3'],
        'email'=>['email','required'],
        'phone'=>['required','string','min:8'],
        'organism'=>['required','string'],
        'country'=>['required','string'],
        'province'=>['string'],
        'poste'=>['required','string'],
        'accepted'=>['required','string'],
      ]);
      $data['evenement_id']=$id;
      $data['phone']='+'.$request->indice . ' | ' . $data['phone'];
      $evenement=Evenement::find($id);
      EvenementInterested::create($data);
      JobMessageEvenement::dispatch($request->email,$evenement->title,$request->name,$evenement->location,$evenement->start_at,$evenement->end_at,$id);
      return redirect()->back()->with('success','succès');
    }
}