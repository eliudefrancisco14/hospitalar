<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['interships'] = Internship::OrderBy('id','desc')->get();
        return view('admin.intership.list.index', $response);
    }

    public function show($id)
    {
        $response['intership'] = Internship::find($id);
        return view('admin.intership.details.index', $response);
    }

}
