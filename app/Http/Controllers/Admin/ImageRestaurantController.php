<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ImageRestaurant;
use App\Models\ListRestaurants;
use Illuminate\Http\Request;

class ImageRestaurantController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        $response['imageRestaurant'] = ListRestaurants::with('images')->find($id);
        $this->Logger->log('info', 'Entrou em Adicionar Imagens da Galeria do restaurante com o Identificador ' . $id);
  
        return view('admin.imageGalleryRestaurant.create.index',$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $validation = $request->validate([
            'images' => 'required|min:1',
        ]);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];
            $ImageGallery = ImageRestaurant::create([
                'path' => $file->store("galleryImages/$id"),
                'fk_idRestaurants' => $id
            ]);
        }
        $this->Logger->log('info', 'Cadastrou Imagens da Galeria do restaurante   com o Identificador ' . $id);
        return redirect("admin/Lista-de-restaurantes/show/$id")->with('create_image', '1');
    }

   
  
   
 
    public function destroy($id)
    {
        ImageRestaurant::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Imagem da Galeria  do restaurante  com o identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }
}
