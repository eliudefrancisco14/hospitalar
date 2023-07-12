<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\LaceCar;
use Illuminate\Http\Request;

class LaceCarController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['laceCars'] = LaceCar::get();
        $this->Logger->log('info', 'Listou  reda-car');
        return view('admin.laceCar.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar  reda-car');
        return view('admin.laceCar.create.index');
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
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,png,gif',
        ]);
        $file = $request->file('photo')->store('lace_cars');


        $laceCar = LaceCar::create([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $file,

        ]);
        $this->Logger->log('info', 'Cadastrou um Hospital com o nome ' . $laceCar->name);

        return redirect("admin/reda-car/show/$laceCar->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['laceCar'] = LaceCar::find($id);
        $this->Logger->log('info', 'Visualizou um Hospital com o identificador ' . $id);
        return view('admin.laceCar.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['laceCar'] = LaceCar::find($id);
        $this->Logger->log('info', 'Entrou em editar um Hospital com o identificador ' . $id);
        return view('admin.laceCar.edit.index', $response);
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
            'name' => 'required',
            'description' => 'required',
            'photo' => 'mimes:jpg,png,gif',
        ]);
        if ($file = $request->file('photo')) {
            $file = $file->store('lace_cars');
        } else {
            $file = LaceCar::find($id)->photo;
        }

        LaceCar::find($id)->update([

            'name' => $request->name,
            'description' => $request->description,
            'photo' => $file,
        ]);

        $this->Logger->log('info', 'Editou  um Hospital com o identificador ' . $id);
        return redirect("admin/reda-car/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou uma reda-car com o identificador ' . $id);
        LaceCar::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
