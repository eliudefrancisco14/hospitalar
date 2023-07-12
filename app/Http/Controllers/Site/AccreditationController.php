<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    
    public function create()
    {
      return view('site.accreditation.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([

            'idcard' => 'required|string|unique:signups|max:255',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'annexPdf' => 'required|mimes:pdf',
            'ExpirationDate' => 'required|string|max:255',
            'IssueDate' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg,svg,gif',
            /* 
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5' */
        ]);
        $file = $request->file('photo')->store('signups');
        $annexPdf = $request->file('annexPdf')->store('signups');
        $signup = Accreditation::create([
            'photo' => $file,
            'name' => $request->name,
            'surname' => $request->surname,
            'organization' => $request->organization,
            'function' => $request->function,
            'birthday' => $request->birthday,
            'obs'=> $request->obs,
            'gender' => $request->gender,
            'country' => $request->country,
            'category' => $request->category,
            'IssueDate' => $request->IssueDate,
            'ExpirationDate' => $request->ExpirationDate,
            'email' => $request->email,
            'annexPdf' =>  $annexPdf,
            'idcard' => $request->idcard,

        ]);
        return redirect()->back()->with('create', '1');
    }



    

}
