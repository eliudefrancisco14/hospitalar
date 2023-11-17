<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
        $data = $this->validate(
            $request,
            [
                'nomeCompleto' => 'required', 
                'dataNascimento' => 'required', 
                'peso' => 'required', 
                'altura' => 'required', 
                'morada' => 'required', 
                'maisInformacoes' => 'required', 
                'medicacao' => 'required', 
                'gravidade' => 'required', 
                'sintomas' => 'required', 
                'historico' => 'required', 
                'condicoesMedicas' => 'required', 
                'estadoFisico' => 'required', 
                'doencasCronicas' => 'required'
            ],
            [
                'nomeCompleto' => 'Inserir o Nome Completo', 
                'dataNascimento' => 'Inserir a Data de Nascimento', 
                'peso' => 'Inserir o Peso', 
                'altura' => 'Inserir a Altura', 
                'morada' => 'Inserir a Morada', 
                'maisInformacoes' => 'Inserir Informações Adicionais', 
                'medicacao' => 'Inserir a Medicação', 
                'gravidade' => 'Inserir o Estado de Gravidade', 
                'sintomas' => 'Inserir os Sintomas', 
                'historico' => 'Inserir o Histórico', 
                'condicoesMedicas' => 'Inserir as Condições Médicas', 
                'estadoFisico' => 'Inserir o Estado Físico', 
                'doencasCronicas' => 'Inserir o Doenças Crónicas'
            ]
        );
        
        Pacient::create($data);
            
        return redirect()->back()->with('create', '1');
    }
}
