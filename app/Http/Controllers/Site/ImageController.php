<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('site.gallery.image.all.index');
    }
    public function show()
    {
        return view('site.gallery.image.single.index');
    }
}
