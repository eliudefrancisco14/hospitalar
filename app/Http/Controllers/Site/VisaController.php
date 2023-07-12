<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class VisaController extends Controller
{
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('site.visa.index');
    }
}
