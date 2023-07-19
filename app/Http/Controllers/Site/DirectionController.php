<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index(){
        return view('site.about.organization.all.index');
    }

    public function show(){
        return view('site.about.organization.single.index');
    }
}
