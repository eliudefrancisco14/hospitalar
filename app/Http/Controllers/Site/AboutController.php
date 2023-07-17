<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('site.about.about.index');
    }

    public function organization(){
        return view('site.about.organization.index');
    }

    public function portfolio(){
        return view('site.about.portfolio.index');
    }
}
