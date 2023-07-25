<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        return view('site.intership.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'doc' => 'required|mimes:jpg,png,jpeg,pdf',
            'message' => 'required',
        ]);

        $file = $request->file('doc')->store('intership_image'); 

        $internship = Internship::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'doc' => $file,
            'description' => $request->message,
        ]);

        return view('site.intership.index')->with('create','1');
    }
}
