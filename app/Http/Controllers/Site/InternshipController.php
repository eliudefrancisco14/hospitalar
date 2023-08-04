<?php

namespace App\Http\Controllers\Site;

use App\Models\Internship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    public function index()
    {
        return view('site.intership.index');
    }

    public function store(Request $request)
    {
        
     $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'doc' => 'required|mimes:jpg,png,jpeg,pdf',
            'message' => 'required',
        ]);

        $file = $request->file('doc')->store('intership_document'); 

        Internship::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'doc' => $file,
            'description' => $request->message,
        ]);
        return redirect()->route('site.internship')->with('create','1');
    }
}