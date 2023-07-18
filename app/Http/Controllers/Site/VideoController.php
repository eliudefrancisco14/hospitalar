<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('site.gallery.video.all.index');
    }
    public function show()
    {
        return view('site.gallery.video.single.index');
    }
}
