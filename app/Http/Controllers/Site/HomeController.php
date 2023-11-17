<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function index()
    {
        //$response['slideFirst'] = Slide::orderBy('id', 'desc')->first();
                
        return view('site.home.index');
    }
}