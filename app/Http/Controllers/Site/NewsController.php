<?php

namespace App\Http\Controllers\Site;

use App\Models\{Gallery, News};
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->paginate(9);
        return view('site.news.all.index', $response);
    }

    public function show($title)
    {
        try {
            $response['news'] = News::where([['state', 'Autorizada'], ['title', urldecode($title)]])->first();
            $response['lasted'] = News::where([['state', 'Autorizada'], ['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(5)->get();
            $response['lastedGallery'] = Gallery::OrderBy('id', 'desc')->limit(5)->get();
            
        } catch (\Throwable $th) {
            return redirect()->route('site.news');
        }

        if ($response['news']) {
            return view('site.news.single.index', $response);
        } else {
            return view('errors.404');
        }

    }
}
