<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function index()
    {
        return view('site.gallery.audio.all.index');
    }
    public function show()
    {
        return view('site.gallery.audio.single.index');
    }
}
