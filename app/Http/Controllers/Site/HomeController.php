<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Doc;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Schedule;
use App\Models\ScheduleIndustrialization;
use App\Models\Signup;
use App\Models\SlideShow;

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
}
