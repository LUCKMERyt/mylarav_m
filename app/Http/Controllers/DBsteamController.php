<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DBsteamController extends Controller
{
    public function show(): View
    {

        $staems =Db::table('staem')->get();
        return view('staem',['staems'=>$staems]);
    }
}
