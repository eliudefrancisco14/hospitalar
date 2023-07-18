<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{gallery, ImageGallery, Log};
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = gallery::get();
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
                'image' => 'image|mimes:jpg,png,jpeg|max:8000',
            ],
            [
                'name.required' => 'Informar o titulo',
                'image.required' => 'Selecionar a imagem de capa',
                'description.required' => 'Inserir o detalhe da galeria',
            ]
        );
        $exists_name = gallery::where('name', $request['name'])->exists();
        if ($exists_name) {
            return redirect()->back()->with('exists', '1');
        }
        $file = $request->file('image')->store('main_galleryPage');
        try {
            $id = gallery::insertGetId(
                [
                    'image' => $file,
                    'name' => $request->name,
                    'description' => $request->description,
                ]
            );
            for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                ImageGallery::create([
                    'path' => $file->store("image_Gallery/$id"),
                    'fk_idGallery' => $id
                ]);
            }
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Capa de galeria - utilizador: ' . $request['name']);
        return redirect()->route('admin.gallery.index')->with('create', '1');
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['data'] = gallery::find($id);
            $response['datas'] = ImageGallery::where('fk_idGallery', $id)->get();
            $this->Logger->log('info', 'Visualizou uma capa de imagem com o identificador ' . $id);
            return view('admin.gallery.details.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['data'] = gallery::find($id);
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
                'image' => 'mimes:jpg,png,jpeg',
            ]
        );
        if ($file = $request->file('image')) {
            $file = $file->store('main_galleryPage');
        } else {
            $file = gallery::find($id)->image;
        }
        gallery::find($id)->update(
            [
                'image' => $file,
                'name' => $request->name,
                'description' => $request->description,
            ]
        );
        $this->Logger->log('info', 'Editou uma imagem da galeria com o identificador ' . $id);
        return redirect()->route('admin.gallery.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma imagem da galeria com o identificador ' . $id);
        gallery::find($id)->delete();
        return redirect()->route('admin.gallery.index')->with('destroy', '1');
    }
}
