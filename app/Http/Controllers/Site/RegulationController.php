<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    
    public function index(){
        $response['regulations'] = Regulation::OrderBy('id', 'desc')->get();
        return view('site.about.regulation.index', $response);
    }
}
