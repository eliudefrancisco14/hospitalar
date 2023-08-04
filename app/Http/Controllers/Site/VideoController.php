<?php

namespace App\Http\Controllers\Site;

use App\Models\Video;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $response['videos'] = Video::orderBy('id', 'desc')->paginate(21);
        return view('site.gallery.video.all.index',$response);
    }
    public function show()
    {
        return view('errors.404');
    }
}
