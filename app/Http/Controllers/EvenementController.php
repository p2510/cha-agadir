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
         
      $countries= ["Morocco","Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
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