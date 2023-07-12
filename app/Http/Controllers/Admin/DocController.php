<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['docs'] = Doc::get();
        //Logger
        $this->Logger->log('info', 'Listou os documentos');
        return view('admin.doc.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Adcionar um documento');
        return view('admin.doc.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'doc' => 'required|mimes:pdf',
        ]);
        $file = $request->file('doc')->store('docs');
        $doc = Doc::create([
            'path' => $file,
            'title' => $request->title,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um documento com o titulo ' . $doc->title);

        return redirect("admin/doc/show/$doc->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['doc'] = Doc::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um documento com o identificador ' . $id);
        return view('admin.doc.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['doc'] = Doc::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um documento com o identificador ' . $id);
        return view('admin.doc.edit.index', $response);
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
            'title' => 'required|string|max:255',
            'doc' => 'mimes:pdf',

        ]);

        if ($file = $request->file('doc')) {
            $file = $file->store('docs');
        } else {
            $file = Doc::find($id)->path;
        }
        Doc::find($id)->update([
            'path' => $file,
            'title' => $request->title
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um documento com o identificador ' . $id);
        return redirect("admin/doc/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um documento com o identificador ' . $id);
        Doc::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
