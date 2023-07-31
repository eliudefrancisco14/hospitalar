<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{Log, Service};
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Service::OrderBy('id', 'desc')->get();
        $response['count'] = Service::count();
        $this->Logger->log('info', 'Listou a serviço');
        return view('admin.service.list.index', $response);
    }

    public function create()
    {
        return view('admin.service.create.index');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|min:5|max:255',
                'logo' => 'required|image|mimes:jpg,png,jpeg|max:5000',
                'description' => 'required',
            ],
            [
                'title' => 'Informar o título',
                'logo' => 'Informar a imagem',
                'description' => 'Informar a descrição',
            ]
        );
        $file = $request->file('logo')->store('service_image');
        try {
            $data = Service::create([
                'logo' => $file,
                'title' => $request->title,
                'description' => $request->description,
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou um serviço com o titulo ' . $data->title);
        return redirect()->route('admin.service.index')->with('create', '1');
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['data'] = Service::find($id);
            $this->Logger->log('info', 'Visualizou um serviço com o identificador ' . $id);
            return view('admin.service.details.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['data'] = Service::find($id);
            $this->Logger->log('info', 'Entrou em editar serviço com o identificador ' . $id);
            return view('admin.service.edit.index', $response);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|min:5|max:255',
                'logo' => 'required|image|mimes:jpg,png,jpeg|max:5000',
                'description' => 'required',
            ],
            [
                'title' => 'Informar o título',
                'logo' => 'Informar a imagem',
                'description' => 'Informar a descrição',
            ]
        );
        if ($file = $request->file('logo')) {
            $file = $file->store('service_image');
        } else {
            $file = Service::find($id)->logo;
        }
        try {
            Service::find($id)->update(
                [
                    'logo' => $file,
                    'title' => $request->title,
                    'description' => $request->description,
                ]
            );
        } catch (Exception $e) {
            return $e;
        }
        $response['data'] = Service::get();
        $this->Logger->log('info', 'Editou o serviço com o identificador ' . $id);
        return redirect()->route('admin.service.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um serviço com o identificador ' . $id);
        Service::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
