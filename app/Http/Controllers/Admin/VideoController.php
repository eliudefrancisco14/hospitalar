<?php

namespace App\Http\Controllers\Admin;

use Exception;
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
    public function index()
    {
        $response['data'] = Video::orderBy('id', 'desc')->get();
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
        $data =  $request->validate(
            [
                'title' => 'required',
                'link' => 'required|min:2',
                'description' => 'required',
                'date' => 'required',

            ],
            [
                'title' => 'Informar o título',
                'link' => 'Informar o link',
                'description' => 'Informar a descrição',
            ]
        );
        try {
            $data = Video::create($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Cadastrou um Video com o titulo ' . $data->title);
        return redirect("admin/video/show/$data->id")->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Video::find($id);
        $response['count'] = Video::count();

        $this->Logger->log('info', 'Visualizou um Video com o identificador ' . $id);
        return view('admin.video.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Video::find($id);
        $this->Logger->log('info', 'Entrou em editar um Video com o identificador ' . $id);
        return view('admin.video.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $data =  $request->validate(
            [
                'title' => 'required',
                'link' => 'required|min:2',
                'description' => 'required',
                'date' => 'required',

            ],
            [
                'title' => 'Informar o título',
                'link' => 'Informar o link',
                'description' => 'Informar a descrição',
            ]
        );
        try {
            Video::find($id)->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Editou um Video com o identificador ' . $id);
        return redirect()->route('admin.video.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        try {
            Video::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou um Video com o identificador ' . $id);
        return redirect()->route('admin.video.index')->with('destroy', '1');
    }
}
