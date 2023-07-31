<?php

namespace App\Http\Controllers\Admin;

use Exception;
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

        $request->validate(
            [
                'name' => 'required|min:5|max:255',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
                'description' => 'required',
            ],
            [
                'name.required' => 'Informar o nome',
                'image.required' => 'Informar a imagem',
                'description.required' => 'Informar a descrição',
            ]
        );
        $file = $request->file('image')->store('digitalInclusion_image');
        try {
            $digitalInclusion = DigitalInclusion::create([
                'name' => $request->name,
                'image' => $file,
                'description' => $request->description,
            ]);
        } catch (Exception $e) {
            return $e;
        }
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
        $request->validate(
            [
                'name' => 'required|min:5|max:255',
                'image' => 'image|mimes:jpg,png,jpeg|max:5000',
                'description' => 'required',
            ],
            [
                'name.required' => 'Informar o nome',
                'image.required' => 'Informar a imagem',
                'description.required' => 'Informar a descrição',
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('digitalInclusion_image');
        } else {
            $file = DigitalInclusion::find($id)->image;
        }
        try {
            DigitalInclusion::find($id)->update([
                'name' => $request->name,
                'image' => $file,
                'description' => $request->description,
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou uma inclusão digital com o identificador' . $id);
        return redirect("admin/digitalInclusion/show/$id")->with('create', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma inclusão digital com o identificador ' . $id);
        DigitalInclusion::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
