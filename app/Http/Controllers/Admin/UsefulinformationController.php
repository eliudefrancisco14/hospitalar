<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Usefulinformation;
use Illuminate\Http\Request;

class UsefulinformationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        $response['usefulinformation'] = Usefulinformation::first();
        $this->Logger->log('info', 'Visualizou   informações uteis');
        return view('admin.usefulinformation.details.index',$response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['usefulinformation'] = Usefulinformation::first();
        $this->Logger->log('info', 'entrou em editar Documento do Hospital ');
        return view('admin.usefulinformation.edit.index',$response);
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
            'title' => 'required|',
        ]);
        $about = Usefulinformation::find($id)->update([
         
            'body' => $request->body, 
            'title' => $request->title,    ]);
            $this->Logger->log('info', 'Editou  informações uteis');
        return redirect()->route('admin.Usefulinformation.show')->with('edit', '1');
    }
}
