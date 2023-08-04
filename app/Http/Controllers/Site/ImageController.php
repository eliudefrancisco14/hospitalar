<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ImageGallery;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $response['galleries'] = Gallery::orderBy('id', 'desc')->paginate(21);
        return view('site.gallery.image.all.index', $response);
    }
    public function show($name)
    {
        //
        try {
            $response['gallery'] = Gallery::where([['name', urldecode($name)]])->first();
            
            $response['images'] = ImageGallery::where('fk_idGallery',  $response['gallery']->id)->paginate(21);
           
            return view('site.gallery.image.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.image');
        }
    }
}
