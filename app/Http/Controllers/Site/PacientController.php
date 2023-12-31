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
                'dataNascimento' => 'required', 
                'nBI' => 'required',                
                'peso' => 'required', 
                'altura' => 'required', 
                'morada' => 'required', 
                'maisInformacoes' => 'required', 
                'medicacao' => 'required', 
                'gravidade' => 'required', 
                'sintomas' => 'required', 
                'historico' => 'required', 
                'condicoesMedicas' => 'required', 
                'doencasCronicas' => 'required'
            ],
            [
                'nomeCompleto' => 'Inserir o Nome Completo', 
                'dataNascimento' => 'Inserir a Data de Nascimento', 
                'nBI' => 'Inserir o nº de BI', 
                'peso' => 'Inserir o Peso', 
                'altura' => 'Inserir a Altura', 
                'morada' => 'Inserir a Morada', 
                'maisInformacoes' => 'Inserir Informações Adicionais', 
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

        $data["consulted"] = false;
        
        Pacient::create($data);
        
        $response['data'] = Pacient::Where('nBI',$data["nBI"])->first();

        $pdf = PDF::loadview('pdf.consult.index',['response'=> $response]);
        return $pdf->setPaper('A4')->stream('index.pdf');

    }

    public function pdf($nBI){
        $response['data'] = Pacient::Where('nBI',$nBI)->first();

        $pdf = PDF::loadview('pdf.consult.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }
}
