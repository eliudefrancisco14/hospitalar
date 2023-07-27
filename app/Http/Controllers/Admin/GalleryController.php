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
                'image' => 'image|mimes:jpg,png,jpeg|max:8000',
            ],
            [
                'name.required' => 'Informar o titulo',
                'image.required' => 'Selecionar a imagem de capa',
                'description.required' => 'Informar o detalhe da galeria',
            ]
        );
        $exists_name = Gallery::where('name', $request['name'])->exists();
        if ($exists_name) {
            return redirect()->back()->with('exists', '1');
        }
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
            return $e;
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
                'image' => 'mimes:jpg,png,jpeg',
            ]
        );
        $exists_name = Gallery::where('name', $request['name'])->exists();
        if ($exists_name) {
            return redirect()->back()->with('exists', '1');
        }
        if ($file = $request->file('image')) {
            $file = $file->store('gallery_page_image');
        } else {
            $file = Gallery::find($id)->image;
        }
        Gallery::find($id)->update(
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
        Gallery::find($id)->delete();
        return redirect()->route('admin.gallery.index')->with('destroy', '1');
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Gallery::count();
        $data = Gallery::where('name', "Like", "%" . $searchText . "%")
            ->orwhere('description', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'asc')->paginate(5);
        return view('admin.gallery.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em galeria');
    }
}
