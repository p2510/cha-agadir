<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class CenterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Center::latest('id')->limit(1)->get();
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
        $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();

        $downloads=Downloadpage::where('pagename','centre-excellence')->get();

        return view('static.center')->with(['datas'=>$datas,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'downloads'=>$downloads]);
    }
}