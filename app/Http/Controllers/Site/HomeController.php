<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class HomeController extends Controller
{


    public function index()
    {        
        $response['faqs'] = Faq::get();
        return view('site.home.index',$response);
    }

    
}
