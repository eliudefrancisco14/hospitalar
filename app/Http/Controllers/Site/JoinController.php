<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class JoinController extends Controller
{
    public function index(){
        return view('site.join.index');
    }
}