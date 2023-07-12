<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Doc;

class DocController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['docs'] = Doc::orderBy('id', 'desc')->get();
        return view('site.doc.index', $response);
    }
}
