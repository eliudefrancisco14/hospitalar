<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['definitions'] = Definition::get();
        $this->Logger->log('info', 'Listou Definição Sobre o INFOSI');
        return view('admin.definition.list.index', $response);
    }

   
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar Definição');
        return view('admin.definition.create.index');
    }

    
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $definition = Definition::create([
            'title' => $request->title,
            'description' => $request->description,

        ]);
        $this->Logger->log('info', 'Cadastrou uma definição de título ' . $definition->title);
        return redirect("admin/definition/show/$definition->id")->with('create', '1');
    
    }

    public function show($id)
    {
        $response['definition'] = Definition::find($id);
        $this->Logger->log('info', 'Visualizou Definição com o identificador'. $id);
        return view('admin.definition.details.index', $response);
    }

    public function edit($id)
    {
        $response['definition'] = Definition::find($id);
        $this->Logger->log('info', 'Entrou em editar Definição com o identificador'. $id);
        return view('admin.definition.edit.index', $response);
    
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Definition::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);
        $this->Logger->log('info', 'Cadastrou uma definição com o identificador'. $id);
        return redirect("admin/definition/show/$id")->with('create', '1');
    
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma definição com o identificador ' . $id);
        Definition::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
