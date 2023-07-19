<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['data'] = Faq::OrderBy('id', 'desc')->paginate(5);
        $response['count'] = Faq::count();
        $this->Logger->log('info', 'Listou FAQ');
        return view('admin.faq.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar FAQ');
        return view('admin.faq.create.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],
        [
            'title.required' => 'Informar a pergunta',
            'description.required' => 'Informar a resposta',
        ]);
        $data = Faq::create([
            'title' => $request->title,
            'description' => $request->title,
        ]);
        $this->Logger->log('info', 'Cadastrou uma FAQ ' . $data->email);
        return redirect()->route('admin.faq.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Faq::find($id);
        $response['count'] = Faq::count();        
        $this->Logger->log('info', 'Visualizou uma FAQ com o identificador ' . $id);
        return view('admin.faq.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Faq::find($id);
        $this->Logger->log('info', 'Entrou em editar uma FAQ com o identificador ' . $id);
        return view('admin.faq.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],
        [
            'title.required' => 'Informar a pergunta',
            'description.required' => 'Informar a resposta',
        ]);
        $data = Faq::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        Faq::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Editou uma FAQ com o identificador ' . $id);
        return redirect()->route('admin.faq.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma FAQ com o identificador ' . $id);
        Faq::find($id)->delete();
        return redirect()->route('admin.faq.index')->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Faq::count();
        $data = Faq::where('title', "Like", "%" . $searchText . "%")->Orwhere('description', $searchText)->OrderBy('id', 'desc')->paginate(5);
        return view('admin.faq.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em FAQ');
    }
}
