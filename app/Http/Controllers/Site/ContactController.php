<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Configuration;

class ContactController extends Controller
{

    public function index()
    {

        $response['configuration'] = Configuration::first();
        return view('site.contact.index', $response);
    }
}
