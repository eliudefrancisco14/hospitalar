<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index()
    {
        $response['directions'] = Direction::OrderBy('id', 'Desc')->limit(3)->get();
        $response['departments'] = Department::OrderBy('id', 'Desc')->get();
        return view('site.about.organization.all.index', $response);
    }

    public function show($name)
    {

        try {
            $response['direction'] = Direction::where([['name', urldecode($name)]])->first();
        } catch (\Throwable $th) {
            return redirect()->route('site.organization');
        }
        if ($response['direction']) {
            return view('site.about.organization.single.index', $response);
        }else{
            return view('errors.404');
        }
    }
}