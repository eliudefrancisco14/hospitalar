<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Models\Direction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Direction::get();
        $response['count'] = Direction::count();
        $this->Logger->log('info', 'Listou os Directores');
        return view('admin.direction.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em adicionar um direcção');
        return view('admin.direction.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'office' => 'required|string|max:255',
            'body' => 'required',
            'path' => 'required|mimes:jpg,png,jpeg|max:8000',
        ]);
        $file = $request->file('path')->store('direction_image');
        $direction = Direction::create([
            'name' => $request->name,
            'office' => $request->office,
            'body' => $request->body,
            'path' => $file,
        ]);
        $this->Logger->log('info', 'Cadastrou direcção com o nome ' . $direction->name);

        return redirect("admin/direction/show/$direction->id")->with('create', '1');
    }
    public function show($id)
    {
        $response['data'] = Direction::find($id);
        $this->Logger->log('info', 'Visualizar direcção com o identificador ' . $id);
        return view('admin.direction.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Direction::find($id);
        $this->Logger->log('info', 'Entrou em editar direcção com o identificador ' . $id);
        return view('admin.direction.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'office' => 'required|string|max:255',
            'body' => 'required',
            'path' => 'required|mimes:jpg,png,jpeg|max:8000',
        ]);
        if ($file = $request->file('image')) {
            $file = $file->store('Directions');
        } else {
            $file = Direction::find($id)->path;
        }
        Direction::find($id)->update([
            'name' => $request->name,
            'office' => $request->office,
            'body' => $request->body,
            'path' => $file,
        ]);
        $this->Logger->log('info', 'Editou em direcção com o identificador ' . $id);
        return redirect("admin/direction/show/$id")->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um director com o identificador ' . $id);
        Direction::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Direction::count();
        $data = Direction::where('name', "Like", "%" . $searchText . "%")
            ->orwhere('description', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'desc')->paginate(5);
        return view('admin.direction.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em direcção');
    }
}