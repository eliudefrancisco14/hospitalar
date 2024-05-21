<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\Pacient;

class PacientController extends Controller
{
    public function index(){
        //$response['definitions'] = Definition::OrderBy('id', 'asc')->get();
    return view('site.pacient.index'/*, $response*/);
    }

    public function store(Request $request)
    {
        set_time_limit(120);
        
        $data = $this->validate(
            $request,
            [
                'nomeCompleto' => 'required', 
                'dataNascimento' => 'required|numeric|min:0|max:200', 
                'peso' => 'required', 
                'altura' => 'required', 
                'temperatura' => 'required',
                'batimento' => 'required',
                'morada' => 'required', 
                'medicacao' => 'required', 
                'gravidade' => 'required', 
                'sintomas' => 'required', 
                'historico' => 'required', 
                'condicoesMedicas' => 'required', 
                'doencasCronicas' => 'required'
            ],
            [
                'nomeCompleto' => 'Inserir o Nome Completo', 
                'dataNascimento' => 'Inserir a Idade', 
                'peso' => 'Inserir o Peso', 
                'altura' => 'Inserir a Altura', 
                'temperatura' => 'Inserir a Temperatura',
                'batimento' => 'Inserir o Batimento Cardíaco',
                'morada' => 'Inserir a Morada', 
                'medicacao' => 'Inserir a Medicação', 
                'gravidade' => 'Inserir o Estado de Gravidade', 
                'sintomas' => 'Inserir os Sintomas', 
                'historico' => 'Inserir o Histórico', 
                'condicoesMedicas' => 'Inserir as Condições Médicas', 
                'doencasCronicas' => 'Inserir o Doenças Crónicas'
            ]
        );

        
        $data["sintomas"] = json_encode($request->input('sintomas'));
        $data["historico"] = json_encode($request->input('historico'));
        $data["condicoesMedicas"] = json_encode($request->input('condicoesMedicas'));
        $data["maisInformacoes"] = $request->input('maisInformacoes');
        
        $data["temperatura"] = 0;
        $data["batimento"] = 0;
        


        $data["consulted"] = false;
        
        $paciente = Pacient::create($data);
        $response['data'] = Pacient::Where('id',$paciente->id)->first();

        /* Adicionar um redirecionamento _blank para que não abra o pdf na mesma aba */

        $pdf = PDF::loadview('pdf.consult.index',['response'=> $response]);
        return $pdf->setPaper('A4')->stream('index.pdf');

    }

    public function pdf($nBI){
        $response['data'] = Pacient::Where('nBI',$nBI)->first();

        $pdf = PDF::loadview('pdf.consult.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }
}
