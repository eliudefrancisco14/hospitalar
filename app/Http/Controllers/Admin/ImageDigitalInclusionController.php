<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{DigitalInclusion,ImageDigitalInclusion};

class ImageDigitalInclusionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        $response['data'] = DigitalInclusion::with(['images'])->find($id);
        $this->Logger->log('info', 'Entrou em Adicionar Imagens da Inclusão Digital com o Identificador ' . $id);
        return view('admin.imageDigitalInclusion.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'images' => 'required|min:1',
        ]);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];
            $imageDigitalInclusion = ImageDigitalInclusion::create([
                'path' => $file->store("digitalinclusion_image/$id"),
                'fk_idDigital_inclusion' => $id
            ]);
        }
        $this->Logger->log('info', 'Cadastrou Imagens da Inclusão Digital com o Identificador ' . $id);
        return redirect("admin/digitalInclusion/show/$id")->with('create_image', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma Imagem da Inclusão Digital com o identificador ' . $id);
        ImageDigitalInclusion::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
