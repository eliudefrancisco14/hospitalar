<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\{Asks, Contact};
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $response['faqs'] = Asks::OrderBy('id', 'Desc')->limit(10)->get();
        $response['contact'] = Contact::OrderBy('id', 'Desc')->get()->first();

        return view('site.contact.index',$response);
    }
}
