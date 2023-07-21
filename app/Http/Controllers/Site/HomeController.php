<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\{Faq, Partner, Province, Service, Slide};

class HomeController extends Controller
{


    public function index()
    {
        $response['slideshows'] = Slide::OrderBy('id', 'desc')->limit(6)->get();

        $response['totalPoint'] = Province::count();
        $response['totalGoodPoint'] = Province::count();
        $response['totalBadPoint'] = Province::count();

        $response['partners'] = Partner::OrderBy('id', 'desc')->get();
        $response['services'] = Service::OrderBy('id', 'desc')->limit(3)->get();
        return view('site.home.index', $response);
    }
}