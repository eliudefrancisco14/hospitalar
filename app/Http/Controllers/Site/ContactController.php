<?php

namespace App\Http\Controllers\Site;

use App\Models\{Contact, Faq};
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $response['faqs'] = Faq::OrderBy('id', 'Desc')->limit(10)->get();
        $response['contact'] = Contact::OrderBy('id', 'Desc')->get()->first();
        return view('site.contact.index',$response);
    }
}