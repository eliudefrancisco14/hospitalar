<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{AngolaOnline, Province};

class ProvinceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['data'] = Province::get();
        $response['count'] = Province::count();
        $this->Logger->log('info', 'Listou Provincias ');
        return view('admin.province.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar província');
        return view('admin.province.create.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
            ],
            [
                'name' => 'Informar o nome',
                'description' => 'Informar a descrição',
            ]
        );
        try {
            Province::create($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou uma província de nome ' . $data['name']);
        return redirect()->route('admin.province.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Province::find($id);
        $response['count']  = AngolaOnline::where("fk_idProvince", $id)->get()->count();
        $response['id_'] =   AngolaOnline::where("fk_idProvince", $id)->value('fk_idProvince');

        $this->Logger->log('info', 'Visualizou província com o identificador' . $id);
        return view('admin.province.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Province::find($id);
        $this->Logger->log('info', 'Entrou em editar província com o identificador' . $id);
        return view('admin.province.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
            ],
            [
                'name' => 'Informar o nome',
                'description' => 'Informar a descrição',
            ]
        );
        try {
            Province::find($id)->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou uma província com o identificador' . $id);
        return redirect()->route('admin.province.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        try {
            Province::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou uma província com o identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }
}
