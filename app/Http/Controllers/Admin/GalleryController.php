<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{gallery, ImageGallery, Log};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, File, Storage};

class GalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['img'] = gallery::get();
        $response['count'] = gallery::count();
        $this->Logger->log('info', 'Listou a galeria');
        return view('admin.gallery.list.index', $response);
    }

    public function create()
    {
        $response['img'] = gallery::get();
        return view('admin.gallery.create.index', $response);
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
        $name = $request->input('name');
        $description = $request->input('description');
        $ext = $request->file("image")->getClientOriginalExtension();

        $stringImageReFormat = str_replace(" ", "", $request->input('name'));
        $imageName = $stringImageReFormat . "." . $ext;
        $imageEncoded = File::get($request->image);
        Storage::disk('local')->put('public/main_galleryPage/' . $imageName, $imageEncoded);
        $data = array(
            'name' => $name,
            'image' => $imageName,
            'description' => $description,
        );
        try {
            $id = gallery::insertGetId($data);
            for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                $ImageGallery = ImageGallery::create([
                    'path' => $file->store("image_Gallery/$id"),
                    'fk_idGallery' => $id
                ]);
            }
        } catch (Exception $e) {
            return $e;
        }
        return redirect()->back()->with('create', '1');
        $this->Logger->log('info', 'Capa de galeria - utilizador: ' . $request['name']);
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['img'] = gallery::find($id);
            $this->Logger->log('info', 'Visualizou uma capa de imagem com o identificador ' . $id);
            return view('admin.gallery.create.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['img'] = gallery::find($id);
            $this->Logger->log('info', 'Entrou em editar a capa de imagem com o identificador ' . $id);
            return view('admin.gallery.edit.index', $response);
        }
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Inserir o nome da imagem',
                'description.required' => 'Inserir o detalhe da galeria',
                'description.required' => 'Inserir a descrição da imagem'
            ]
        );
        gallery::find($id)->update($data);
        $response['main'] = gallery::find($id);
        $this->Logger->log('info', 'Editou a capa com o identificador ' . $id);
        return redirect()->route('admin.imageGallery.index')->with('edit', '1');
    }

    public function editImage($id)
    {
        $img = gallery::find($id);
        return view('admin.gallery.edit.indexImage', ['img' => $img]);
    }

    public function updateImage(Request $request, $id)
    {
        $data = $this->validate(
            $request,
            [
                'image' => 'required|image|mimes:jpg,png,jpeg|max:5000'
            ],
            [
                'name.required' => 'Inserir o nome da imagem',
            ]
        );
        if ($request->hasFile("image")) {
            $data = gallery::find($id);
            $exists = Storage::disk('local')->exists("public/main_galleryPage/" . $data->image);
            if ($exists) {
                Storage::delete('main_galleryPage/' . $data->image);
            }
            $request->file("image")->getClientOriginalExtension();
            $request->image->storeAs("main_galleryPage/", $data->image);
            $arrayToUpdate = array('image' => $data->image);
            gallery::where('id', $id)->update($arrayToUpdate);
        } else {
            $errors = "Nenhuma Imagem Foi Selecionada";
            return $errors;
        }
        $this->Logger->log('info', 'Editou o titulo com o identificador ' . $id);
        return redirect()->route('admin.gallery.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $record = gallery::find($id);
        $recordItem = ImageGallery::where('fk_idGallery', $record->id)->exists();

        $existsMain = Storage::disk('local')->exists("public/main_galleryPage/" . $record->image);
        if ($existsMain) {
            Storage::delete('main_galleryPage/' . $record->image);
        }
        if ($recordItem) {
            ImageGallery::where($record['fk_idGallery'])->delete();
        }
        $existsCover = Storage::disk('local')->exists("public/image_Gallery/" . $record->id);
        if ($existsCover) {
            Storage::delete('public/image_Gallery/{' . $record->id . '}');
        }
        $record->delete();
        $this->Logger->log('info', 'Eliminou a capa de imagem com Identificador Nº: ' . $record['id']);
        return redirect()->back()->with('destroy', '1');
    }
}
