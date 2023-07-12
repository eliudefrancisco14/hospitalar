<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\HotelDocument;
use Illuminate\Http\Request;

class HotelDocumentController extends Controller
{
   

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        $response['hotelDocument'] = HotelDocument::first();
        $this->Logger->log('info', 'Visualizou  Documento do Hotel');
        return view('admin.hotelDocument.details.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['hotelDocument'] = HotelDocument::first();
        $this->Logger->log('info', 'entrou em editar Documento do Hotel');
        return view('admin.hotelDocument.edit.index',$response);
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
            'body' => 'required|min:20|',

        ]);
        $about = HotelDocument::find($id)->update([
            'body' => $request->body,   ]);
            $this->Logger->log('info', 'Editou Documento do Hotel');
        return redirect()->route('admin.hotelDocuments.show')->with('edit', '1');
    }

}
