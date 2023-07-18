<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['departments'] = Department::get();
        $this->Logger->log('info', 'Listou Departamentos');
        return view('admin.department.list.index', $response);
    }

   
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar Departamentos');
        return view('admin.department.create.index');
    }

    
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'boss' => 'required',
            'description' => 'required',
        ]);

        $department = Department::create([
            'name' => $request->name,
            'boss' => $request->boss,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou uma Departamento de nome ' . $department->name);
        return redirect("admin/department/show/$department->id")->with('create', '1');
    
    }

    public function show($id)
    {
        $response['department'] = Department::find($id);
        $this->Logger->log('info', 'Visualizou Departamento com o identificador'. $id);
        return view('admin.department.details.index', $response);
    }

    public function edit($id)
    {
        $response['department'] = Department::find($id);
        $this->Logger->log('info', 'Entrou em editar Departamento com o identificador'. $id);
        return view('admin.department.edit.index', $response);
    
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required',
            'boss' => 'required',
            'description' => 'required',
        ]);

        Department::find($id)->update([
            'name' => $request->name,
            'boss' => $request->boss,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou um Departamento com o identificador'. $id);
        return redirect("admin/department/show/$id")->with('create', '1');
    
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um Departamento com o identificador ' . $id);
        Department::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
