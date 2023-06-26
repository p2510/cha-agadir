<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ModeApplicationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function down()
    {
        Artisan::call('down', [
            '--secret' => 'cha-code225', 
        ]);
        return redirect()->back();
    }
    public function up()
    {
        Artisan::call('up');
        return redirect()->back();
    }
}