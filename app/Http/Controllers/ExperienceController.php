<?php

namespace App\Http\Controllers;

use App\Models\Pagevideo;
use App\Models\Experience;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Facades\App;

class ExperienceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Experience::latest('id')->limit(1)->get()->map(function ($item){
            if (App::isLocale('en')) {
                $item->content=$item->content_en;
            }
            return $item;
       });
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $downloads=Downloadpage::where('pagename','ferme-experiementale')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->filename=$item->filename_en;
            }
            return $item;
           });
           $pagevideos=Pagevideo::where('pagename','ferme-experiementale')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
            }
            return $item;
           });
       

        $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
        $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();
        
        
        return view('static.experience')->with(['datas'=>$datas,'shareFacebook'=>$shareFacebook, 'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'downloads'=>$downloads,'pagevideos'=>$pagevideos]);
    }
}