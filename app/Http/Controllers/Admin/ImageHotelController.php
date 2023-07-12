<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;

use App\Models\HostelList;
use App\Models\ImageHospital;
use App\Models\ImageHotel;
use Illuminate\Http\Request;
class ImageHotelController extends Controller
{
   
    
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        $response['hostelList'] = HostelList::with('images')->find($id);
        $this->Logger->log('info', 'Entrou em Adicionar Imagens da Galeria do hotel com o Identificador ' . $id);
        return view('admin.imageGalleryHotel.create.index',$response);
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
            $ImageGallery = ImageHotel::create([
                'path' => $file->store("galleryImages/$id"),
                'fk_idHotel_list' => $id
            ]);
        }
        $this->Logger->log('info', 'Cadastrou Imagens da Galeria do hotel   com o Identificador ' . $id);
        return redirect("admin/Lista-de-hoteis/show/$id")->with('create_image', '1');
    }

   
  
   
 
    public function destroy($id)
    {
        ImageHotel::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Imagem da Galeria  do hotel com o identificador ' . $id);
        return redirect()->back()->with('destroy', '1');
    }
}
