<?php

namespace App\Http\Controllers\Site;

use App\Classes\Random;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\Signup;
use App\Models\SlideShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\Mail\MailSignUp;
use App\Models\Event;
use App\Models\TypeEvent;
use Intervention\Image\ImageManagerStatic as Image;

class SignupController extends Controller
{
    private $random;
    public function __construct()
    {
        $this->random = new Random;
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response['type_events'] = TypeEvent::get();
        $response['slideshows'] = SlideShow::orderBy('id', 'desc')->limit(3)->get();
        return view('site.signup.index', $response);
    }

    /**           
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SignupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignupRequest $request)
    {
  
       // if($request->country != 'Angola'){

            $response['code'] = $this->random->AlphaNumeric(6);
            $nameFile = $response['code'].".jpg";
            //RESIZE PHOTO
            $img = Image::make($request->file('photo'))->resize(428, 395);
            $img->save('../storage/app/public/signups/'.$nameFile);
            $file = $request->file('photoBI')->store('BI');
            $signup = Signup::create([
                'photo' => 'signups/'.$nameFile,
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
                'title' => $request->title,
                'startDate' => $request->startDate,
                'endDate' => $request->endDate,
                'photoBI' =>  $file,
                'code' => $response['code'],
                'event'=> $request->evento,

            ]);

            if($request->events){
                for ($i = 0; $i < count($request->events); $i++) {
                    $row = $request->events[$i];
                    Event::create([
                        'type_event_id' => $row,
                        'signup_id' => $signup->id,
                    ]);
                }
            }
        
            //data to be included in the email
            $response['events'] = Event::with('typeevent')->where('signup_id', $signup->id)->get();
            $response['name'] = $signup->name;
            $response['email'] = $signup->email;
            $response['surname'] = $signup->surname;
            $response['organization'] = $signup->organization;
            $response['idcard'] = $signup->idcard;
            
            Mail::to($signup->email)->send(new MailSignUp($response));
            return redirect()->back()->with('create', '1');
       /* }else{
            return redirect()->back()->with('errorAng', '1');

        } */     
      
    }


    public function show($id){

        $response['signup'] = Signup::find($id);
    
        $pdf = PDF::loadview('pdf.signup.index',$response);


        return $pdf->setPaper('A2', 'landscape')->stream('pdf');

    }
}
