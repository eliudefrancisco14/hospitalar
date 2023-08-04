<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\{DigitalInclusion, ImageDigitalInclusion};

class DigitalInclusionController extends Controller
{

    public function index()
    {
        $response['digitalInclusions'] = DigitalInclusion::orderBy('id', 'desc')->paginate(21);
        return view('site.digitalIncludsion.all.index', $response);
    }
    public function show($name)
    {
        try {
            $response['digitalInclusion'] = DigitalInclusion::where([['name', urldecode($name)]])->first();

            $response['imageDigitalInclusions'] = ImageDigitalInclusion::where('fk_idDigital_inclusion',  $response['digitalInclusion']->id)->paginate(21);

            return view('site.digitalIncludsion.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.digitalInclusion');
        }
    }
}
