<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientController extends Controller
{
    public function index(){
        //$response['definitions'] = Definition::OrderBy('id', 'asc')->get();
    return view('site.pacient.index'/*, $response*/);
    }
}
