<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\HostelList;
use App\Models\HotelDocument;
use Illuminate\Http\Request;

class HospitalController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['hospitais'] = Hospital::get();
        $this->Logger->log('info', 'Listou  Hospitais');
        return view('admin.hospital.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar  Hospitais');
        return view('admin.hospital.create.index');
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

        $hostelList = Hospital::create([
            'description' => $request->description,
            'hospitalName' => $request->hospitalName,
            'attachment' => $file,
            'locationMap' => $request->locationMap,

        ]);
        $this->Logger->log('info', 'Cadastrou um Hospital com o nome ' . $hostelList->hospitalName);

        return redirect("admin/hospital/show/$hostelList->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['hostelList'] = Hospital::with('images')->find($id);
        $this->Logger->log('info', 'Visualizou um Hospital com o identificador ' . $id);
        return view('admin.hospital.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['hospital'] = Hospital::find($id);
        $this->Logger->log('info', 'Entrou em editar um Hospital com o identificador ' . $id);
        return view('admin.hospital.edit.index', $response);
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
            'hospitalName' => 'required|string|max:255',
            'attachment' => 'mimes:jpg,png,gif',
        ]);
        if ($file = $request->file('attachment')) {
            $file = $file->store('attachment');
        } else {
            $file = Hospital::find($id)->attachment;
        }

        Hospital::find($id)->update([

            'description' => $request->description,
            'hospitalName' => $request->hospitalName,
            'attachment' => $file,
            'locationMap' => $request->locationMap,
        ]);

        $this->Logger->log('info', 'Editou  um Hospital com o identificador ' . $id);
        return redirect("admin/hospital/show/$id")->with('edit', '1');
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
        Hospital::find($id)->delete();

        return redirect()->back()->with('destroy', '1');
    }
}
