<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $response['faqs'] = Faq::get();
        return view('site.contact.index',$response);
    }
}
