<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Models\Definition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefinitionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['data'] = Definition::get();
        $response['count'] = Definition::count();
        $this->Logger->log('info', 'Listou definição sobre o INFOSI');
        return view('admin.definition.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar definição');
        return view('admin.definition.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $definition = Definition::create([
            'title' => $request->title,
            'description' => $request->description,

        ]);
        $this->Logger->log('info', 'Cadastrou uma definição de título ' . $definition->title);
        return redirect()->route('admin.definition.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Definition::find($id);
        $response['count'] = Definition::count();
        $this->Logger->log('info', 'Visualizou definição com o identificador' . $id);
        return view('admin.definition.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Definition::find($id);
        $this->Logger->log('info', 'Entrou em editar definição com o identificador' . $id);
        return view('admin.definition.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Definition::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);
        $this->Logger->log('info', 'Editou uma definição com o identificador' . $id);
        return redirect()->route('admin.definition.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma definição com o identificador ' . $id);
        Definition::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Definition::count();
        $data = Definition::where('title', "Like", "%" . $searchText . "%")
            ->where('description', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'asc')->paginate(5);
        return view('admin.definition.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em definição');
    }
}
