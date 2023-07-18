<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Models\Asks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsksController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['data'] = Asks::get();
        $response['count'] = Asks::count();
        $this->Logger->log('info', 'Listou contacto');
        return view('admin.asks.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar contacto');
        return view('admin.asks.create.index');
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'asks' => 'required',
            'response' => 'required',
        ],
        [
            'asks.required' => 'Informar a pergunta',
            'response.required' => 'Informar a resposta',
        ]);
        $data = Asks::create([
            'asks' => $request->asks,
            'response' => $request->response,
        ]);
        $this->Logger->log('info', 'Cadastrou uma pergunta frequente ' . $data->email);
        return redirect()->route('admin.asks.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Asks::find($id);
        $response['count'] = Asks::count();        
        $this->Logger->log('info', 'Visualizou uma pergunta frequente com o identificador ' . $id);
        return view('admin.asks.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Asks::find($id);
        $this->Logger->log('info', 'Entrou em editar uma pergunta frequente com o identificador ' . $id);
        return view('admin.asks.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'asks' => 'required',
            'response' => 'required',
        ],
        [
            'asks.required' => 'Informar a pergunta',
            'response.required' => 'Informar a resposta',
        ]);
        Asks::find($id)->update([
            'asks' => $request->asks,
            'response' => $request->response,
        ]);
        $this->Logger->log('info', 'Editou uma pergunta frequente com o identificador ' . $id);
        return redirect()->route('admin.asks.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma pergunta frequente com o identificador ' . $id);
        Asks::find($id)->delete();
        return redirect()->route('admin.asks.index')->with('destroy', '1');
    }
}
