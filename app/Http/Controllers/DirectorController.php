<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Director;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Facades\App;

class DirectorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Director::latest('id')->limit(1)->get()->map(function ($item){
            if (App::isLocale('en')) {
                $item->content=$item->content_en;
            }
            return $item;
       });
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
     
         $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
         $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();
 
        $downloads=Downloadpage::where('pagename','mot-du-directeur')->get();
        return view('director')->with(['datas'=>$datas,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'downloads'=>$downloads]);
    }
}