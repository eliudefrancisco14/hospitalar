<?php

namespace App\Http\Controllers\Site;

use App\Models\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(){
        $response['services'] = Service::OrderBy('id', 'desc')->get();
        return view('site.service.all.index', $response);
    }

    public function show($title){
        
        try {
            $response['service'] = Service::where([['title', urldecode($title)]])->first();
           
        } catch (\Throwable $th) {
            return redirect()->route('site.services');
        }

        if ($response['service']) {
            return view('site.service.single.index', $response);
        } else {
            return view('errors.404');
        }
    }
}
