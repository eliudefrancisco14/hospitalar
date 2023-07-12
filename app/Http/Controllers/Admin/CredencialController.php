<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Signup;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;


class CredencialController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }


    /**
     * Display a verify with certified QrScan
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($code)
    {

        $response['signup'] = Signup::with('events')->where('code',$code)->first();

        return view('site.verify.index', $response);
    }

    
    /**
     * Print the Certified
     *
     * @return \Illuminate\Http\Response
     */
    public function print($code)
    {

        $response['signup'] = Signup::where('code', $code)->with('events')->first();
        if($response['signup']->status == 'APROVADO' && 'USP' == Auth::user()->level){

            if($response['signup']->category == 'DELEGADO' || $response['signup']->category == 'CONVIDADO'){
                
                $response['background'] = '#000';
                $response['color'] = 'red';

            }elseif($response['signup']->category == 'SEGURANÇA'){

                $response['background'] = '#fff';
                $response['color'] = '#000';
            }elseif($response['signup']->category == 'ORGANIZAÇÃO'){
                $response['background'] = '#4D1933';
                $response['color'] = '#fff';
                
            }elseif($response['signup']->category == 'SERVIÇO' || $response['signup']->category == 'STAFF'){
                
                $response['background'] = '#000';
                $response['color'] =  'rgb(153, 102, 51)';
            }elseif($response['signup']->category == 'PROTOCOLO' || $response['signup']->category == 'CERIMONIAL'){

                $response['background'] = '#000';
                $response['color'] = 'rgb(0, 176, 240)';
            }elseif($response['signup']->category == 'SECRETARIADO'){
                $response['background'] = '#4475A1';
                $response['color'] = '#FCE5D6';

            }elseif($response['signup']->category == 'IMPRENSA'){
                
                $response['background'] = '#000';
                $response['color'] = 'yellow';
            } 

            $response['qrcode'] = QrCode::size(130)->backgroundColor(0,0,0,0)->generate(route('admin.credencial.verify',$code));
            $pdf = PDF::loadView('pdf/credencial/index', $response);
            $pdf->setPaper('A6', 'portrait');
           
            //Logger
            $this->Logger->log('emergency', 'Imprimiu uma credencial com o código: '.$response['signup']->code);

            return $pdf->stream('credenciamento-' . $response['signup']->code . ".pdf");

        }else{
    
            return redirect()->route('login')->with('NoAuth', '1');
        }

    }


    public function log(){
    
        $response['logs'] = Log::where('level', 'emergency')->orderBy('id', 'desc')->get();
        return view('admin.signup.log.index', $response);
    }
}

