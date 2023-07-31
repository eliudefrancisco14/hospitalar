<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use App\Models\Regulation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Regulation::get();
        $response['count'] = Regulation::count();
        $this->Logger->log('info', 'Listou os Regulamentos');
        return view('admin.regulation.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em Adcionar um Regulamento');
        return view('admin.regulation.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'path' => 'required|mimes:pdf|max:5000',
        ], [
            'title' => 'Informar o título',
            'path' => 'Informar a imagem',
        ]);
        $file = $request->file('path')->store('regulation_image');
        try {
            $regulation = Regulation::create([
                'path' => $file,
                'title' => $request->title,
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou um regulamento com o titulo ' . $regulation->title);
        return redirect("admin/regulation/show/$regulation->id")->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Regulation::find($id);
        $response['count'] = Regulation::count();
        $this->Logger->log('info', 'Visualizar um regulamento com o identificador ' . $id);
        return view('admin.regulation.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Regulation::find($id);
        $this->Logger->log('info', 'Entrou em editar um regulamento com o identificador ' . $id);
        return view('admin.regulation.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'path' => 'required|mimes:pdf|max:5000',
        ], [
            'title' => 'Informar o título',
            'path' => 'Informar a imagem',
        ]);
        if ($file = $request->file('path')) {
            $file = $file->store('regulation_image');
        } else {
            $file = Regulation::find($id)->path;
        }
        try {
            Regulation::find($id)->update([
                'path' => $file,
                'title' => $request->title
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Editou um regulamento com o identificador ' . $id);
        return redirect("admin/regulation/show/$id")->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um Regulamento com o identificador ' . $id);
        Regulation::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
