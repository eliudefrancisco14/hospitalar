<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DigitalInclusion;
use Illuminate\Http\Request;

class DigitalInclusionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['digitalInclusions'] = DigitalInclusion::get();
        $this->Logger->log('info', 'Listou Inclusão Digital');
        return view('admin.digitalInclusion.list.index', $response);
    }

   
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar Inclusão Digital');
        return view('admin.digitalInclusion.create.index');
    }

    
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);

        $file = $request->file('image')->store('DigitalInclusion');
        $digitalInclusion = DigitalInclusion::create([
            'name' => $request->name,
            'image' => $file,
            'description' => $request->description,
        ]);

        $this->Logger->log('info', 'Cadastrou uma Inclusão Digital de nome ' . $digitalInclusion->name);
        return redirect("admin/digitalInclusion/show/$digitalInclusion->id")->with('create', '1');
    
    }

    public function show($id)
    {
        $response['digitalInclusion'] = DigitalInclusion::find($id);
        $this->Logger->log('info', 'Visualizou Inclusão Digital com o identificador'. $id);
        return view('admin.digitalInclusion.details.index', $response);
    }

    public function edit($id)
    {
        $response['digitalInclusion'] = DigitalInclusion::find($id);
        $this->Logger->log('info', 'Entrou em editar Inclusão Digital com o identificador'. $id);
        return view('admin.digitalInclusion.edit.index', $response);
    
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('DigitalInclusion');
        } else {
            $file = DigitalInclusion::find($id)->image;
        }

        DigitalInclusion::find($id)->update([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou uma Inclusão Digital com o identificador'. $id);
        return redirect("admin/digitalInclusion/show/$id")->with('create', '1');
    
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma Inclusão Digital com o identificador ' . $id);
        DigitalInclusion::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
