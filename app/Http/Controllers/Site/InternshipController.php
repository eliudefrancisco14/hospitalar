<?php

namespace App\Http\Controllers\Site;

use App\Models\Internship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MailSignUp;
use Illuminate\Support\Facades\Mail;

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

        $internship = Internship::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'doc' => $file,
            'description' => $request->message,
        ]);

        Mail::to(config('mail.from.address'))->send(new MailSignUp($internship));
        return redirect()->back()->with('helpCreate', '1');
        
        return redirect()->route('site.internship')->with('create','1');
    }
}