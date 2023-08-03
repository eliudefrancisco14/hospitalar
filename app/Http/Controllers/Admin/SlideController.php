<?php

namespace App\Http\Controllers\Admin;

use Exception;
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
        $request->validate(
            [
                'title' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
                'description' => 'required',
            ],
            [
                'title.required' => 'Informar o título',
                'description.required' => 'Informar a descrição do slide show',
            ]
        );
        $file = $request->file('image')->store('slideshow_image');
        try {
            $data = Slide::create([
                'title' => $request->title,
                'path' => $file,
                'description' => $request->description,
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
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
        $request->validate(
            [
                'title' => 'required',
                'image' => 'image|mimes:jpg,png,jpeg|max:5000',
                'description' => 'required',
            ],
            [
                'title.required' => 'Informar o título',
                'description.required' => 'Informar a descrição do slide show',
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('slideshow_image');
        } else {
            $file = Slide::find($id)->path;
        }
        try {
            Slide::find($id)->update([
                'title' => $request->title,
                'path' => $file,
                'description' => $request->description,
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Editou um slide show com o identificador ' . $id);
        return redirect()->route('admin.slide.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        try {
            Slide::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou um slide show com o identificador ' . $id);
        return redirect()->route('admin.slide.index')->with('destroy', '1');
    }
}
