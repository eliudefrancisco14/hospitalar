<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\LaceCarDocument;
use Illuminate\Http\Request;

class LaceCarDocumentController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        $response['laceCarDocument'] = LaceCarDocument::first();
        $this->Logger->log('info', 'Visualizou  Documento do Hospital');
        return view('admin.laceCarDocument.details.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['laceCarDocument'] = LaceCarDocument::first();
        $this->Logger->log('info', 'entrou em editar Documento do Hospital ');
        return view('admin.laceCarDocument.edit.index',$response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
        
            'body' => 'required|min:20|',]);
        $about = LaceCarDocument::find($id)->update([
         
            'body' => $request->body,   ]);
            $this->Logger->log('info', 'Editou Documento do Hospital');
        return redirect()->route('admin.laceCarDocument.show')->with('edit', '1');
    }
}
