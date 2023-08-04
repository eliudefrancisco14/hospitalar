<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{DigitalInclusion, ImageDigitalInclusion};

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
        return view('admin.imageDigitalinclusion.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $request->validate(
            [
                'images' => 'required|min:1|max:5000',
            ]
        );
        try {
            for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                ImageDigitalInclusion::create([
                    'path' => $file->store("digitalInclusion_image/$id"),
                    'fk_idDigital_inclusion' => $id
                ]);
            }
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou Imagens da Galeria com o Identificador ' . $id);
        return redirect("admin/digitalInclusion/show/$id")->with('create_image', '1');
    }

    public function destroy($id)
    {
        try {
            ImageDigitalInclusion::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou uma Imagem da Inclusão Digital com o identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }
}
