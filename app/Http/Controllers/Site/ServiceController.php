<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $response['services'] = Service::OrderBy('id', 'desc')->get();
        return view('site.service.index', $response);
    }
}
