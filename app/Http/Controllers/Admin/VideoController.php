<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $response['count'] = Video::count();
        $this->Logger->log('info', 'Listou Videos');
        return view('admin.video.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em Cadastrar  Videos');
        return view('admin.video.create.index');
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'title' => 'required|min:5|max:50',
            'link' => 'required|min:2',
            'description' => 'required|min:5|max:255',
            'date' => 'required',

        ]);
        $video = Video::create([
            'link' => $request->link,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date


        ]);
        $this->Logger->log('info', 'Cadastrou um Video com o titulo ' . $video->title);

        return redirect("admin/video/show/$video->id")->with('create', '1');
    }

    public function show($id)
    {
        $response['video'] = Video::find($id);
        $response['count'] = Video::count();
        
        $this->Logger->log('info', 'Visualizou um Video com o identificador ' . $id);
        return view('admin.video.details.index', $response);
    }

    public function edit($id)
    {
        $response['video'] = Video::find($id);
        $this->Logger->log('info', 'Entrou em editar um Video com o identificador ' . $id);
        return view('admin.video.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:5|max:50',
            'link' => 'required|min:2',
            'description' => 'required|min:5|max:255',
            'date' => 'required',
        ]);
        Video::find($id)->update([
            'link' => $request->link,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
        ]);
        $this->Logger->log('info', 'Editou um Video com o identificador ' . $id);
        return redirect()->route('admin.video.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um Video com o identificador ' . $id);
        Video::find($id)->delete();
        return redirect()->route('admin.video.index')->with('destroy', '1');
    }
}
