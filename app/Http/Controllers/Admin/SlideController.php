<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['data'] = Slide::OrderBy('id', 'desc')->get();
        $response['count'] = Slide::count();
        $this->Logger->log('info', 'Listou o slide show');
        return view('admin.slide.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar slide show');
        return view('admin.slide.create.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:8000',
            'description' => 'required',
        ],
        [
            'title.required' => 'Informar o titulo',
            'description.required' => 'Informar a descrição do slide show',
        ]);
        
        $file = $request->file('image')->store('slideshow_image');

        $data = Slide::create([
            'title' => $request->title,
            'path' => $file,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Cadastrou um slide show ' . $data->email);
        return redirect()->route('admin.slide.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Slide::find($id);
        $response['count'] = Slide::count();        
        $this->Logger->log('info', 'Visualizou um slide show com o identificador ' . $id);
        return view('admin.slide.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Slide::find($id);
        $this->Logger->log('info', 'Entrou em editar um slide show com o identificador ' . $id);
        return view('admin.slide.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
        ],
        [
            'title.required' => 'Informar o titulo',
            'description.required' => 'Informar a descrição do slide show',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('slideshow_image');
        } else {
            $file = Slide::find($id)->image;
        }

        Slide::find($id)->update([
            'title' => $request->title,
            'path' => $file,
            'description' => $request->description,
        ]);
        $this->Logger->log('info', 'Editou um slide show com o identificador ' . $id);
        return redirect()->route('admin.slide.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um slide show com o identificador ' . $id);
        Slide::find($id)->delete();
        return redirect()->route('admin.slide.index')->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Slide::count();
        $data = Slide::where('title', "Like", "%" . $searchText . "%")
        ->orwhere('description', "Like", "%" . $searchText . "%")
        ->OrderBy('id', 'desc')->paginate(5);
        return view('admin.slide.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em slide show');
    }
}
