<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Province, AngolaOnline};

class AngolaOnlineController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function create($id)
    {
        $response['data'] = Province::with(['provinces'])->find($id);
        $response['id'] = AngolaOnline::where("fk_idProvince", $id)->value('fk_idProvince');
        return view('admin.provincePoint.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'state' => 'required',
            ],
            [
                'name.required' => 'Informar o nome',
                'description.required' => 'Informar a descrição',
                'state.required' => 'Informar o estado',
            ]
        );
        try {
            AngolaOnline::create($data);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou um ponto com o Identificador ' . $id);
        return redirect("admin/province/show/$id")->with('create', '1');
    }

    public function edit($id, $id_)
    {
        $response['src'] = Province::find($id);
        $response['data'] = AngolaOnline::find($id_);
        $response['id'] = AngolaOnline::where("fk_idProvince", $id)->value('fk_idProvince');
        $response['id_'] = AngolaOnline::where("id", $id_)->value('id');
        $this->Logger->log('info', 'Entrou em editar província com o identificador' . $id_);
        return view('admin.provincePoint.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data = AngolaOnline::find($id);
        $fk = AngolaOnline::where("fk_idProvince", $data->fk_idProvince)->value("fk_idProvince");
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'state' => 'required',
            ],
            [
                'name.required' => 'Informar o nome',
                'description.required' => 'Informar a descrição',
                'state.required' => 'Informar o estado',
            ]
        );
        try {
            AngolaOnline::find($id)->update($data);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Atualizou um ponto com o Identificador ' . $id);
        return redirect("admin/province/show/$fk")->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um ponto com o identificador ' . $id);
        AngolaOnline::find($id)->delete();
        return redirect()->route('admin.province.index')->with('destroy', '1');
    }
}
