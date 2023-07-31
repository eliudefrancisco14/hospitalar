<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Gallery, ImageGallery};

class ImageGalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function create($id)
    {
        $response['data'] = Gallery::with(['images'])->find($id);
        return view('admin.imageGallery.create.index', $response);
    }

    public function store(Request $request, $id)
    {
        $request->validate(
            [
                'images' => 'required|min:1|max:5000',
            ]
        );
        try {
            for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                ImageGallery::create([
                    'path' => $file->store("gallery_cover_image/$id"),
                    'fk_idGallery' => $id
                ]);
            }
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou Imagens da Galeria com o Identificador ' . $id);
        return redirect("admin/gallery/show/$id")->with('create_image', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma imagem da galeria com o identificador ' . $id);
        ImageGallery::find($id)->delete();
        return redirect()->route('admin.gallery.index')->with('destroy', '1');
    }
}
