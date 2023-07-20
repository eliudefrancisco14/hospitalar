<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Definition;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $response['definitions'] = Definition::OrderBy('id', 'desc')->get();
        return view('site.about.about.index', $response);
    }

}
