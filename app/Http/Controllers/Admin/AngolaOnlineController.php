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
        return view('admin.provincePoint.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $request->validate(
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
            AngolaOnline::create([
                'fk_idProvince' => $id,
                'name' => $request->name,
                'description' => $request->description,
                'state' => $request->state,
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou um ponto com o Identificador ' . $id);
        return redirect("admin/province/show/$id")->with('create', '1');
    }

    public function update($id)
    {
        $data = AngolaOnline::find($id);
        $fk = AngolaOnline::where("fk_idProvince", $data->fk_idProvince)->value("fk_idProvince");
        $state = $data->state;
        if ($state == 'Activo') {
            $st = "Inactivo";
        } else {
            $st = "Activo";
        }
        try {
            AngolaOnline::find($id)->update([
                'state' => $st
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou um ponto com o Identificador ' . $id);
        return redirect("admin/province/show/$fk")->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um ponto com o identificador ' . $id);
        AngolaOnline::find($id)->delete();
        return redirect()->route('admin.province.index')->with('destroy', '1');
    }
}
