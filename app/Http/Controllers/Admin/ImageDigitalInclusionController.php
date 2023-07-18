<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DigitalInclusion;
use App\Models\ImageDigitalInclusion;
use Illuminate\Http\Request;

class ImageDigitalInclusionController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        //
        $response['digitalInclusion'] = DigitalInclusion::with(['images'])->find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em Adicionar Imagens da Inclusão Digital com o Identificador ' . $id);
        return view('admin.imageDigitalInclusion.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validation = $request->validate([
            'images' => 'required|min:1',
        ]);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];
            $imageDigitalInclusion = ImageDigitalInclusion::create([
                'path' => $file->store("DigitalInclusionImages/$id"),
                'fk_idDigital_inclusion' => $id
            ]);
        }
        //Logger
        $this->Logger->log('info', 'Cadastrou Imagens da Inclusão Digital com o Identificador ' . $id);
        return redirect("admin/digitalInclusion/show/$id")->with('create_image', '1');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageGallery  $ImageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma Imagem da Inclusão Digital com o identificador ' . $id);
        ImageDigitalInclusion::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
