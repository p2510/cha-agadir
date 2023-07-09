<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Tabpage;
use App\Models\Pagevideo;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Facades\App;

class CampusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Campus::latest('id')->limit(1)->get();
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
        $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();
        $downloads=Downloadpage::where('pagename','vie estudiantine')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->filename=$item->filename_en;
            }
            return $item;
           });
           $pagevideos=Pagevideo::where('pagename','campus')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
            }
            return $item;
           });
           $tabs=Tabpage::where('pagename','vie estudiantine')->with('tabimages')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
                $item->content=$item->content_en;
            }
            return $item;
        });
        return view('static.campus')->with(['datas'=>$datas,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'downloads'=>$downloads,'pagevideos'=>$pagevideos,'tabs'=>$tabs]);
    }
}