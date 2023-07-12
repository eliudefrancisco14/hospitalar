<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Covid19GuidelineController extends Controller
{
    public function index()
    {

        return view('site.covid19Guidelines.index');
    }
}
