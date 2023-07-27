<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{DigitalInclusion, ImageDigitalInclusion};

class DigitalInclusionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['data'] = DigitalInclusion::get();
        $response['count'] = DigitalInclusion::count();
        $this->Logger->log('info', 'Listou inclusão digital');
        return view('admin.digitalInclusion.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar inclusão digital');
        return view('admin.digitalInclusion.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);
        $file = $request->file('image')->store('digitalInclusion_image');
        $digitalInclusion = DigitalInclusion::create([
            'name' => $request->name,
            'image' => $file,
            'description' => $request->description,
        ]);

        $this->Logger->log('info', 'Cadastrou uma inclusão digital de nome ' . $digitalInclusion->name);
        return redirect("admin/digitalInclusion/show/$digitalInclusion->id")->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = DigitalInclusion::find($id);
        $response['count']  = ImageDigitalInclusion::where("fk_idDigital_inclusion", $id)->get()->count();
        $this->Logger->log('info', 'Visualizou inclusão digital com o identificador' . $id);
        return view('admin.digitalInclusion.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = DigitalInclusion::find($id);
        $this->Logger->log('info', 'Entrou em editar inclusão digital com o identificador' . $id);
        return view('admin.digitalInclusion.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);
        if ($file = $request->file('image')) {
            $file = $file->store('digitalInclusion_image');
        } else {
            $file = DigitalInclusion::find($id)->image;
        }
        DigitalInclusion::find($id)->update([
            'name' => $request->name,
            'image' => $file,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou uma inclusão digital com o identificador' . $id);
        return redirect("admin/digitalInclusion/show/$id")->with('create', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma inclusão digital com o identificador ' . $id);
        DigitalInclusion::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = DigitalInclusion::count();
        $data = DigitalInclusion::where('name', "Like", "%" . $searchText . "%")
            ->orwhere('description', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'asc')->paginate(5);
        return view('admin.digitalInclusion.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em galeria de inclusão digital');
    }
}
