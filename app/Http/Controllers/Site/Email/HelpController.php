<?php

namespace App\Http\Controllers\Site\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;

class HelpController extends Controller
{
    public function send(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string',
            'subject' => 'required|string|max:255',
            'msg' => 'required|string',
        ]);

        Mail::to(['eliude.francisco@infosi.gov.ao'])->send(new MailContact($request->all()));
        return redirect()->back()->with('helpCreate', '1');
    }
}
