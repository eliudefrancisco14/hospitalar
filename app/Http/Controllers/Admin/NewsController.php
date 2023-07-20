<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = News::get();
        $response['count'] = News::count();
        $this->Logger->log('info', 'Listou as Noticias');
        return view('admin.news.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em Criar noticia');
        return view('admin.news.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'typewriter' => 'required|min:2|max:255',
            'body' => 'required|min:5',
            'path' => 'required|mimes:jpg,png,jpeg',
            'date' => 'required',

        ]);
        $file = $request->file('path')->store('news_image');
        $news = News::create([
            'path' => $file,
            'title' => $request->title,
            'typewriter' => $request->typewriter,
            'body' => $request->body,
            'date' => $request->date,
            'state' => 'Autorizada'
        ]);
        $this->Logger->log('info', 'Cadastrou uma noticia com o titulo ' . $news->title);
        return redirect("admin/news/show/$news->id")->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = News::find($id);
        $this->Logger->log('info', 'Visualizar uma noticia com o identificador ' . $id);
        return view('admin.news.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = News::find($id);
        $this->Logger->log('info', 'Entrou em editar uma noticia com o identificador ' . $id);
        return view('admin.news.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'typewriter' => 'required|min:2|max:255',
            'body' => 'required|min:5',
            'date' => 'required',
            'path' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('path')) {
            $file = $file->store('news_image');
        } else {
            $file = News::find($id)->path;
        }
        News::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'typewriter' => $request->typewriter,
            'body' => $request->body,
            'date' => $request->date,
            'state' => 'Autorizada'
        ]);
        $this->Logger->log('info', 'Editou uma noticia com o identificador ' . $id);
        return redirect("admin/news/show/$id")->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma noticia com o identificador ' . $id);
        News::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = News::count();
        $data = News::where('email', "Like", "%" . $searchText . "%")
            ->where('title', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'desc')->paginate(5);
        return view('admin.news.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em noticias');
    }
}
