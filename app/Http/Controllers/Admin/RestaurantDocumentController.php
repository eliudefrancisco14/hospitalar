<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\RestaurantDocument;
use Illuminate\Http\Request;

class RestaurantDocumentController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        $response['restaurantDocument'] = RestaurantDocument::first();
        $this->Logger->log('info', 'visualizou  Documento do restaurante');
        return view('admin.restaurantDocument.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['hospitalDocument'] = RestaurantDocument::first();
        $this->Logger->log('info', 'entrou em editar Documento do restaurante');
        return view('admin.restaurantDocument.edit.index', $response);
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
        $about = RestaurantDocument::find($id)->update([

            'body' => $request->body,
        ]);
        $this->Logger->log('info', 'Editou Documento do restaurante');
        return redirect()->route('admin.restaurantDocument.show')->with('edit', '1');
    }
}
