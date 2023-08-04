<?php

namespace App\Http\Controllers\Site;

use App\Models\Definition;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $response['definitions'] = Definition::OrderBy('id', 'asc')->get();
        return view('site.about.about.index', $response);
    }
}
