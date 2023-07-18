<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index(){
        return view('site.join.index');
    }
}
