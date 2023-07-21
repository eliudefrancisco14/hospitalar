<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Models\AngolaOnline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;

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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        AngolaOnline::create([
            'fk_idProvince' => $id,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou um ponto com o Identificador ' . $id);
        return redirect("admin/province/show/$id")->with('create', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um ponto com o identificador ' . $id);
        AngolaOnline::find($id)->delete();
        return redirect()->route('admin.province.index')->with('destroy', '1');        
    }
}
