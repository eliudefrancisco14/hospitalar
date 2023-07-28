<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\ProvinceDocument;
use App\Http\Controllers\Controller;

class ProvinceDocumentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        $response['provinceDocument'] = ProvinceDocument::first();
        $this->Logger->log('info', 'Visualizou  Documento de Pontos de pontos Angola Online');
        return view('admin.provinceDocument.details.index', $response);
    }

    public function edit($id)
    {
        $response['provinceDocument'] = ProvinceDocument::first();
        $this->Logger->log('info', 'entrou em editar Documento de Pontos de pontos Angola Online');
        return view('admin.provinceDocument.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'body' => 'required|min:20|',
        ],[
            'body' => 'Informar o conteúdo'
        ]);
        $exists = ProvinceDocument::where('body', $request['body'])->exists();
        if ($exists) {
            return redirect()->back()->with('exists', '1');
        }
        try {
            ProvinceDocument::find($id)->update($data);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Editou Documento de Pontos de pontos Angola Online');
        return redirect()->route('admin.provinceDocument.show')->with('edit', '1');
    }
}
