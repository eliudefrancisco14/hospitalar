<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Leitura;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\Pacient;

class PacientController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function index()
    {
        $response['data'] = Pacient::OrderBy('id', 'desc')->get();

        $this->Logger->log('info', 'Listou os Paciente');
        return view('admin.pacient.list.index', $response);
    }
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar paciente');
        return view('admin.pacient.create.index');
    }
    public function store(Request $request)
    {
        $data = $this->validate(
            $request,
            [
                'nomeCompleto' => 'required',
                'dataNascimento' => 'required|numeric|min:0|max:200',
                'peso' => 'required',
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
                'dataNascimento' => 'Inserir a Idade',
                'peso' => 'Inserir o Peso',
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

        $pacient = Pacient::create($data);

        $leitura = Leitura::where('pacient_id',$pacient->id)->first();

        return view('admin.pacient.details.index', ['data'=> $pacient, 'leitura' => $leitura])->with('create', '1');
        // return redirect()->route('pdf.consult.index', $response)->with('create', '1');
    }
    public function show($id)
    {

        $response['data'] = Pacient::find($id);

        $response['leitura'] = Leitura::where('pacient_id',$response['data']->id)->first();

        $this->Logger->log('info', 'Visualizou Detalhes do Paciente');
        return view('admin.pacient.details.index', $response);
    }
    public function edit($id)
    {
        $response['data'] = Pacient::find($id);
        $this->Logger->log('info', 'Entrou em Editar paciente de id: ' . $id);
        return view('admin.pacient.edit.index', $response);
    }
    public function update(Request $request, $id)
    {
        $data = $this->validate(
            $request,
            [
                'nomeCompleto' => 'required',
                'dataNascimento' => 'required|numeric|min:0|max:200',
                'peso' => 'required',
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

        Pacient::find($id)->update($data);

        return redirect()->back()->with('edit', '1');
    }
    public function destroy($id)
    {
        Pacient::find($id)->delete();
        $this->Logger->log('info', 'Removeu Paciente');
        return redirect()->back()->with('msg', 'Eliminado com sucesso');
    }
    public function pdflist()
    {
        set_time_limit(120);
        $response['data'] = Pacient::OrderBy('id', 'desc')->get();
        
        $pdf = PDF::loadview('pdf.pacient.list.index', ['response' => $response]);
        return $pdf->setPaper('A4')->stream('index.pdf');
    }
    public function pdfshow($id)
    {
        set_time_limit(120);
        $response['data'] = Pacient::Where('id', $id)->first();
        $response['leitura'] = Leitura::where('pacient_id',$response['data']->id)->first();
        $pdf = PDF::loadview('pdf.pacient.show.index', ['response' => $response]);
        return $pdf->setPaper('A4')->stream('index.pdf');
    }
}
