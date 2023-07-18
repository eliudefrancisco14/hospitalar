<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['provinces'] = Province::get();
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
        $validation = $request->validate([
            'name' => 'required',
            'point' => 'required|numeric',
        ]);

        $province = Province::create([
            'name' => $request->name,
            'point' => $request->point,

        ]);
        $this->Logger->log('info', 'Cadastrou uma província de nome ' . $province->name);
        return redirect("admin/province/show/$province->id")->with('create', '1');
    
    }

    public function show($id)
    {
        $response['province'] = Province::find($id);
        $this->Logger->log('info', 'Visualizou província com o identificador'. $id);
        return view('admin.province.details.index', $response);
    }

    public function edit($id)
    {
        $response['province'] = Province::find($id);
        $this->Logger->log('info', 'Entrou em editar província com o identificador'. $id);
        return view('admin.province.edit.index', $response);
    
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required',
            'point' => 'required|numeric',
        ]);

        Province::find($id)->update([
            'name' => $request->name,
            'point' => $request->point,

        ]);
        $this->Logger->log('info', 'Cadastrou uma província com o identificador'. $id);
        return redirect("admin/province/show/$id")->with('create', '1');
    
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma província com o identificador ' . $id);
        Province::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
