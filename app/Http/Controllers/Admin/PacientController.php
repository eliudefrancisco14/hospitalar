<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
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
    public function show($id)
    {
        
        $response['data'] = Pacient::find($id);
        $this->Logger->log('info', 'Visualizou Detalhes do Paciente');
        return view('admin.pacient.details.index', $response);
    }
    public function edit($id)
    {
        $response['data'] = Pacient::find($id);
        $this->Logger->log('info', 'Entrou em Editar paciente de id: '.$id);
        return view('admin.pacient.create.index', $response);
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        $this->Logger->log('info', 'Removeu Paciente');
        return redirect()->back()->with('msg', 'Eliminado com sucesso');
    }
}
