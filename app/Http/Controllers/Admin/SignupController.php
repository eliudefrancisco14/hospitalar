<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Classes\Random;
use App\Http\Controllers\Controller;
use App\Mail\MailSignUp;
use App\Models\Event;
use App\Models\Signup;
use App\Models\TypeEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDF;
use Intervention\Image\ImageManagerStatic as Image;

class SignupController extends Controller
{
    private $Logger;
    private $random;

    public function __construct()
    {
        $this->Logger = new Logger();
        $this->random = new Random();
    }

    public function list()
    {
        if (Auth::user()->level == 'USP') {
            $response['signups_general'] = Signup::where(
                'status',
                '!=',
                'APROVADO'
            )
                ->orderBy('id', 'desc')
                ->get();
            $response['signups'] = Signup::where('status', 'APROVADO')
                ->orderBy('id', 'desc')
                ->get();
        } else {
            $response['signups'] = Signup::orderBy('id', 'desc')->get();
        }
        //Logger
        $this->Logger->log('emergency', 'Listou as Inscrições');
        return view('admin.signup.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['signup'] = Signup::with('events')->find($id);

        //Logger
        $this->Logger->log(
            'emergency',
            'Visualizar um registo com o identificador ' . $id
        );
        return view('admin.signup.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['type_events'] = TypeEvent::get();
        $response['signup'] = Signup::find($id);
        //Logger
        $this->Logger->log(
            'emergency',
            'Entrou em editar um registo com o identificador ' . $id
        );
        return view('admin.signup.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'idcard' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'tel' => 'required|string|max:255',
            'email' => 'required|email|confirmed',
            'category' => 'required|string|max:255',
            'photo' => 'mimes:jpg,png,jpeg,svg,gif'
        ]);

        if ($file = $request->file('photo')) {
            $img = Image::make($file)->resize(428, 395);
            $namefile = $this->random->AlphaNumeric(8) . '.jpg';
            $img->save('../storage/app/public/signups/' . $namefile);
            $file = 'signups/' . $namefile;
        } else {
            $file = Signup::find($id)->photo;
        }

        Signup::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'surname' => $request->surname,
            'organization' => $request->organization,
            'function' => $request->function,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'country' => $request->country,
            'category' => $request->category,
            'tel' => $request->tel,
            'email' => $request->email,
            'idcard' => $request->idcard,
            'status' => $request->status,
        ]);

        //data to be included in the email
        $signup = Signup::with('events')->find($id);

        if ($signup->status == 'APROVADO') {
            $response['events'] = Event::with('typeevent')
                ->where('signup_id', $signup->id)
                ->get();
            $response['name'] = $signup->name;
            $response['email'] = $signup->email;
            $response['code'] = $signup->code;
            $response['surname'] = $signup->surname;
            $response['organization'] = $signup->organization;
            $response['idcard'] = $signup->idcard;
            $response['msg'] = 'A sua inscrição foi Aprovada com sucesso!';

            Mail::to($signup->email)->send(new MailSignUp($response));
        }
        //Logger
        $this->Logger->log(
            'emergency',
            'Editou um registo com o identificador ' . $id
        );

        return redirect()
            ->route('admin.signup.show', $id)
            ->with('edit', '1');
    }

    public function print()
    {
        $response['signups'] = Signup::orderBy('name', 'ASC')
            ->where('status', 'LIKE', 'APROVADO')
            ->get();

        $response['signup'] = Signup::count();

        $pdf = PDF::loadview('pdf.signup.index', $response);

        return $pdf->setPaper('A3', 'landscape')->stream('pdf');
    }
}
