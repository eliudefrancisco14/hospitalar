<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    public function index(){
        
        return view('site.faq.index');
    }
}
