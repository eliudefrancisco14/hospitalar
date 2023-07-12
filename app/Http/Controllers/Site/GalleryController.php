<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ImageGallery;
use App\Models\Video;

class GalleryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['galleries'] = Gallery::orderBy('id', 'desc')->get();
        $response['videos'] = Video::orderBy('id', 'desc')->get();
        return view('site.gallery.image.all.index', $response);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
        try {
            $response['gallery'] = Gallery::where([['name', urldecode($name)]])->first();
            
            $response['images'] = ImageGallery::where('fk_idGallery',  $response['gallery']->id)->paginate(21);
           
            return view('site.gallery.image.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.gallery');
        }
    }
}
