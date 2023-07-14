<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('site.home.index');
    }

    public function contact()
    {
        return view('site.contact.index');
    }
    
}
