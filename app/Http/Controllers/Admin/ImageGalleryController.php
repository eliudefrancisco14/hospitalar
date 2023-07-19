<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\{ImageGallery, Log};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageGalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = ImageGallery::OrderBy('id', 'asc')->paginate(5);
        $response['count'] = ImageGallery::count();
        $this->Logger->log('info', 'Listou a galeria de image');
        return view('admin.gallery.list.index', $response);
    }

    public function create()
    {
        return view('admin.imageGallery.create.index');
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
        $exists_name = Imagegallery::where('name', $request['name'])->exists();
        if ($exists_name) {
            return redirect()->back()->with('exists', '1');
        }
        $file = $request->file('image')->store('main_galleryPage');
        try {
            $id = ImageGallery::create(
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
            $response['data'] = ImageGallery::find($id);
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
            $response['data'] = ImageGallery::find($id);
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
            $file = ImageGallery::find($id)->image;
        }
        ImageGallery::find($id)->update(
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
        ImageGallery::find($id)->delete();
        return redirect()->route('admin.gallery.index')->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = ImageGallery::count();
        $data = ImageGallery::where('name', "Like", "%" . $searchText . "%")->Orwhere('description', $searchText)->OrderBy('id', 'asc')->paginate(5);
        return view('admin.gallery.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em galeria');
    }
}
