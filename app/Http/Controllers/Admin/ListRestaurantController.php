<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ListRestaurants;
use Illuminate\Http\Request;

class ListRestaurantController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
      $response['listRestaurants'] =ListRestaurants::get();
      $this->Logger->log('info', 'Listou  Restaurantes');
      return view('admin.listRestaurant.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar  Restaurantes');
        return view('admin.listRestaurant.create.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'description' => 'required',

            'attachment' => 'required|mimes:jpg,png,gif',
  ]);
  $file = $request->file('attachment')->store('attachments');
    
        $listRestaurant = ListRestaurants::create([
            'description' => $request->description,
            'restaurantName' => $request->restaurantName,
            'attachment' => $file,
            'locationMap'=> $request->locationMap,
   
        ]);
        $this->Logger->log('info', 'Cadastrou um Restaurante com o nome ' . $listRestaurant->restaurantName);

        return redirect("admin/Lista-de-restaurantes/show/$listRestaurant->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $response['listRestaurant'] = ListRestaurants::with('images')->find($id);
        $this->Logger->log('info', 'Visualizou um restaurante com o identificador ' . $id);
        return view('admin.listRestaurant.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['listRestaurant'] = ListRestaurants::find($id);
        $this->Logger->log('info', 'Entrou em editar um restaurante com o identificador ' . $id);
        return view('admin.listRestaurant.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'description' => 'required',
            'restaurantName' => 'required|string|max:255',
            'attachment' => 'mimes:jpg,png,gif',
 ]);
           if ($file = $request->file('attachment')) {
            $file = $file->store('attachment');
        } else {
            $file = ListRestaurants::find($id)->attachment;
        }
      
        ListRestaurants::find($id)->update([
             
            'description' => $request->description,
            'restaurantName' => $request->restaurantName,
            'attachment' => $file,
            'locationMap'=> $request->locationMap,
        ]);
       
        $this->Logger->log('info', 'Editou  um Hospital com o identificador ' . $id);
        return redirect("admin/Lista-de-restaurantes/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um Hospital com o identificador ' . $id);
        ListRestaurants::find($id)->delete();
        
        return redirect()->back()->with('destroy', '1');
    }

}
