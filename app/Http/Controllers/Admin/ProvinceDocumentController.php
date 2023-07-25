<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ProvinceDocument;
use Illuminate\Http\Request;

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
        $validation = $request->validate([
            'body' => 'required|min:20|',
        ]);
        $about = ProvinceDocument::find($id)->update([
            'body' => $request->body,
        ]);
        $this->Logger->log('info', 'Editou Documento de Pontos de pontos Angola Online');
        return redirect()->route('admin.provinceDocument.show')->with('edit', '1');
    }
}
