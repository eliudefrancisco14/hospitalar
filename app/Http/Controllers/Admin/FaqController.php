<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['faqs'] = Faq::get();
        //Logger
        $this->Logger->log('info', 'Listou as perguntas frequentes');
        return view('admin.faq.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar pergunta frequente');
        return view('admin.faq.create.index');
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
            'description' => 'required|string',
        ]);

        $faq = Faq::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou uma pergunta frequente com o titulo ' . $faq->title);

        return redirect("admin/faq/show/$faq->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['faq'] = Faq::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar uma pergunta frequente com o identificador ' . $id);
        return view('admin.faq.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['faq'] = Faq::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma pergunta frequente com o identificador ' . $id);
        return view('admin.faq.edit.index', $response);
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
            'description' => 'required|string',
        ]);

       
        Faq::find($id)->update($request->all());
        //Logger
        $this->Logger->log('info', 'Editou uma pergunta frequente com o identificador ' . $id);
        return redirect("admin/faq/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou uma pergunta frequente com o identificador ' . $id);
        Faq::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
