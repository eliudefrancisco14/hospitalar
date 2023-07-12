<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\HostelList;
use Illuminate\Http\Request;

class HotelListController extends Controller
{
    
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
      $response['hostelLists'] =HostelList::get();
      $this->Logger->log('info', 'Listou Hotéis');
      return view('admin.hotelList.list.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Entrou em Cadastrar  Hotéis');
        return view('admin.hotelList.create.index');
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
            'stars'=> 'required',
            'attachment' => 'required|mimes:jpg,png,gif',
  ]);
  $file = $request->file('attachment')->store('attachments');
    
        $hostelList = HostelList::create([
            'description' => $request->description,
            'hotelname' => $request->hotelname,
            'attachment' => $file,
            'stars'=> $request->stars,
            'locationMap'=> $request->locationMap,
        ]);
        $this->Logger->log('info', 'Cadastrou um hotel com o titulo ' . $hostelList->hotelname);
        return redirect("admin/Lista-de-hoteis/show/$hostelList->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $response['hostelList'] = HostelList::with('images')->find($id);
        $this->Logger->log('info', 'Visualizou um hotel com o identificador ' . $id);
        return view('admin.hotelList.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['hostelList'] = HostelList::find($id);
        $this->Logger->log('info', 'Entrou em editar um hotel com o identificador ' . $id);
        return view('admin.hotelList.edit.index', $response);
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
            'hotelname' => 'required|string|max:255',
            'attachment' => 'mimes:jpg,png,gif',
        
           ]);
           if ($file = $request->file('attachment')) {
            $file = $file->store('attachment');
        } else {
            $file = HostelList::find($id)->attachment;
        }
      
        HostelList::find($id)->update([
             
            'description' => $request->description,
            'hotelname' => $request->hotelname,
            'stars'=> $request->stars,
            'attachment' => $file,
            'locationMap'=> $request->locationMap,
        ]);
        $this->Logger->log('info', 'Entrou em editar um hotel com o identificador ' . $id);
        return redirect("admin/Lista-de-hoteis/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um hotel com o identificador ' . $id);
        HostelList::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
