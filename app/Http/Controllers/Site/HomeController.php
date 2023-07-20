<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\{Faq, Service};

class HomeController extends Controller
{


    public function index()
    {
        $response['services'] = Service::OrderBy('id', 'desc')->limit(3)->get();
        return view('site.home.index', $response);
    }    
}
