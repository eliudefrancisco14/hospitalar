<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Logger;
use App\Models\Video;


class VideoController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['videos'] = Video::orderBy('id', 'desc')->get();
        //Logger
        $this->Logger->log('info', 'Listou Videos');
        return view('admin.video.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar  Videos');
        return view('admin.video.create.index');
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
            'title' => 'required|min:5|max:255',
            'link' => 'required|min:2',
            'date' => 'required'

        ]);


        $video = Video::create([
            'link' => $request->link,
            'title' => $request->title,
            'date' => $request->date


        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um Video com o titulo ' . $video->title);

        return redirect("admin/video/show/$video->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['video'] = Video::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Video com o identificador ' . $id);
        return view('admin.video.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $response['video'] = Video::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Video com o identificador ' . $id);
        return view('admin.video.edit.index', $response);
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
            'title' => 'required|min:5|max:255',
            'link' => 'required|min:2',
            'date' => 'required',

        ]);


        Video::find($id)->update([
            'link' => $request->link,
            'title' => $request->title,
            'date' => $request->date,


        ]);
        //Logger
        $this->Logger->log('info', 'Editou um Video com o identificador ' . $id);
        return redirect()->route('admin.video.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //Logger
        $this->Logger->log('info', 'Eliminou um Video com o identificador ' . $id);
        Video::find($id)->delete();
        return redirect()->route('admin.video.index')->with('destroy', '1');
    }
}
