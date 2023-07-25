<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Department::get();
        $this->Logger->log('info', 'Listou departamento');
        return view('admin.departament.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar departamento');
        return view('admin.departament.create.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'boss' => 'required',
            'description' => 'required',
        ]);

        $department = Department::create([
            'name' => $request->name,
            'boss' => $request->boss,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou uma departamento de nome ' . $department->name);
        return redirect()->route('admin.department.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Department::find($id);
        $this->Logger->log('info', 'Visualizou departamento com o identificador' . $id);
        return view('admin.department.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Department::find($id);
        $this->Logger->log('info', 'Entrou em editar departamento com o identificador' . $id);
        return view('admin.departament.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
       $request->validate([
            'name' => 'required',
            'boss' => 'required',
            'description' => 'required',
        ]);

        Department::find($id)->update([
            'name' => $request->name,
            'boss' => $request->boss,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou um departamento com o identificador' . $id);
        return redirect()->route('admin.department.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um departamento com o identificador ' . $id);
        Department::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Department::count();
        $data = Department::where('name', "Like", "%" . $searchText . "%")
            ->orwhere('boss', "Like", "%" . $searchText . "%")
            ->orwhere('description', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'asc')->paginate(5);
        return view('admin.department.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em departamento');
    }
}
