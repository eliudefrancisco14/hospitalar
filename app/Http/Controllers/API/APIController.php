<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public $temperatura = 0.0;
    public $batimento = 0;
    public function gettemperatura(){

        return response()->json(['temperatura' => $this->temperatura], 200);
    }
    public function getbatimento(){
        return response()->json(['batimento' => $this->batimento], 200);
        
    }
    public function settemperatura($temperatura){

        $this->temperatura = $temperatura;
        return response()->json(['temperatura' => $this->temperatura], 200);
    }
    public function setbatimento($batimento){
        $this->batimento = $batimento;
        
        return response()->json(['batimento' => $this->batimento], 200);
        
    }
}
