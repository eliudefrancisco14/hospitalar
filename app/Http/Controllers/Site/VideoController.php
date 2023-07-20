<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

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
