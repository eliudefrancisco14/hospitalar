<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\{Gallery, ImageGallery, Log};

class GalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = gallery::OrderBy('id', 'desc')->get();
        $response['count'] = gallery::count();
        $this->Logger->log('info', 'Listou a galeria');
        return view('admin.gallery.list.index', $response);
    }

    public function create()
    {
        return view('admin.gallery.create.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'name.required' => 'Informar o título',
                'image.required' => 'Selecionar a imagem de capa',
                'description.required' => 'Informar o detalhe da galeria',
            ]
        );
        $file = $request->file('image')->store('gallery_page_image');
        try {
            Gallery::create(
                [
                    'image' => $file,
                    'name' => $request->name,
                    'description' => $request->description,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'capa de galeria - utilizador: ' . $request['name']);
        return redirect()->route('admin.gallery.index')->with('create', '1');
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['data'] = Gallery::find($id);
            $response['count']  = ImageGallery::where("fk_idGallery", $id)->get()->count();
            $this->Logger->log('info', 'Visualizou capa de galeria com o identificador ' . $id);
            return view('admin.gallery.details.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['data'] = Gallery::find($id);
            $this->Logger->log('info', 'Entrou em editar a capa de imagem com o identificador ' . $id);
            return view('admin.gallery.edit.index', $response);
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'name.required' => 'Informar o título',
                'image.required' => 'Selecionar a imagem de capa',
                'description.required' => 'Informar o detalhe da galeria',
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('gallery_page_image');
        } else {
            $file = Gallery::find($id)->image;
        }
        try {
            Gallery::find($id)->update(
                [
                    'image' => $file,
                    'name' => $request->name,
                    'description' => $request->description,
                ]
            );
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Editou uma imagem da galeria com o identificador ' . $id);
        return redirect()->route('admin.gallery.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        try {
            Gallery::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou uma imagem da galeria com o identificador ' . $id);
        return redirect()->route('admin.gallery.index')->with('destroy', '1');
    }
}
