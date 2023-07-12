<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\HospitalDocument;
use Illuminate\Http\Request;

class HospitalDocumentController extends Controller
{
   
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        $response['hospitalDocument'] = HospitalDocument::first();
        $this->Logger->log('info', 'Visualizou  Documento do Hospital');
        return view('admin.hospitalDocument.details.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['hospitalDocument'] = HospitalDocument::first();
        $this->Logger->log('info', 'entrou em editar Documento do Hospital ');
        return view('admin.hospitalDocument.edit.index',$response);
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
        $about = HospitalDocument::find($id)->update([
         
            'body' => $request->body,   ]);
            $this->Logger->log('info', 'Editou Documento do Hospital');
        return redirect()->route('admin.hospitalDocuments.show')->with('edit', '1');
    }
}
