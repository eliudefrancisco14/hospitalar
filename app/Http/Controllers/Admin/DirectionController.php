<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['directions'] = Direction::get();
        //Logger
        $this->Logger->log('info', 'Listou os Directores');
        return view('admin.direction.list.index', $response);
    }

    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Adicionar um Director');
        return view('admin.direction.create.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,jpeg|max:8000',
            'description' => 'required',
        ]);
        $file = $request->file('image')->store('Directions');
        $direction = Direction::create([
            'name' => $request->name,
            'path' => $file,
            'description' => $request->description,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Director com o nome ' . $direction->name);

        return redirect("admin/direction/show/$direction->id")->with('create', '1');
    }
    public function show($id)
    {

        $response['direction'] = Direction::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um Director com o identificador ' . $id);
        return view('admin.direction.details.index', $response);
    }

    public function edit($id)
    {

        $response['direction'] = Direction::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Director com o identificador ' . $id);
        return view('admin.direction.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'mimes:jpg,png,jpeg|max:8000',
            'description' => 'required',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('Directions');
        } else {
            $file = Direction::find($id)->path;
        }
        Direction::find($id)->update([
            'name' => $request->name,
            'path' => $file,
            'description' => $request->description,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um Director com o identificador ' . $id);
        return redirect("admin/direction/show/$id")->with('edit', '1');
    }

    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Director com o identificador ' . $id);
        Direction::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
