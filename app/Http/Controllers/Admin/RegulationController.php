<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['regulations'] = Regulation::get();
        //Logger
        $this->Logger->log('info', 'Listou os Regulamentos');
        return view('admin.regulation.list.index', $response);
    }

    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Adcionar um Regulamento');
        return view('admin.regulation.create.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'doc' => 'required|mimes:pdf',
        ]);
        $file = $request->file('doc')->store('Regulations');
        $regulation = Regulation::create([
            'path' => $file,
            'title' => $request->title,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Regulamento com o titulo ' . $regulation->title);

        return redirect("admin/regulation/show/$regulation->id")->with('create', '1');
    }
    public function show($id)
    {

        $response['regulation'] = Regulation::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um Regulamento com o identificador ' . $id);
        return view('admin.regulation.details.index', $response);
    }

    public function edit($id)
    {

        $response['regulation'] = Regulation::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Regulamento com o identificador ' . $id);
        return view('admin.regulation.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'doc' => 'mimes:pdf',

        ]);

        if ($file = $request->file('doc')) {
            $file = $file->store('Regulations');
        } else {
            $file = Regulation::find($id)->path;
        }
        Regulation::find($id)->update([
            'path' => $file,
            'title' => $request->title
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um Regulamento com o identificador ' . $id);
        return redirect("admin/regulation/show/$id")->with('edit', '1');
    }

    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Regulamento com o identificador ' . $id);
        Regulation::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
