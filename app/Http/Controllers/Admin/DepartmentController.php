<?php

namespace App\Http\Controllers\Admin;

use Exception;
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
        $data = $request->validate(
            [
                'name' => 'required',
                'boss' => 'required',
                'description' => 'required'
            ],
            [
                'name.required' => 'Informar o nome',
                'boss.required' => 'Informar o responsável',
                'description.required' => 'Informar a descrição',
            ]
        );
        $exists_boss = Department::where('boss', $request['boss'])->exists();
        if ($exists_boss) {
            return redirect()->back()->with('exists', '1');
        }
        try {
            $department = Department::create($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou uma departamento de nome ' . $department->name);
        return redirect()->route('admin.department.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Department::find($id);
        $this->Logger->log('info', 'Visualizou departamento com o identificador' . $id);
        return view('admin.departament.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Department::find($id);
        $this->Logger->log('info', 'Entrou em editar departamento com o identificador' . $id);
        return view('admin.departament.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'boss' => 'required',
                'description' => 'required'
            ],
            [
                'name.required' => 'Informar o nome',
                'boss.required' => 'Informar o responsável',
                'description.required' => 'Informar a descrição',
            ]
        );
        try {
            Department::find($id)->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou um departamento com o identificador' . $id);
        return redirect()->route('admin.department.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        try {
            Department::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou um departamento com o identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }
}
