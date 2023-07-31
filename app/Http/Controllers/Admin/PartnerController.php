<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Models\{Log, Partner};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = Partner::OrderBy('id', 'desc')->get();
        $response['count'] = Partner::count();
        $this->Logger->log('info', 'Listou a parceiro');
        return view('admin.partner.list.index', $response);
    }

    public function create()
    {
        return view('admin.partner.create.index');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'link' => 'required|max:255',
                'logo' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'title' => 'Informar o título',
                'link' => 'Informar link',
                'logo' => 'Informar a imagem ',
            ]
        );
        $exists = Partner::where('title', $request['title'])->exists();
        if ($exists) {
            return redirect()->back()->with('exists', '1');
        }
        $file = $request->file('logo')->store('partner_image');
        try {
            $data = Partner::create([
                'logo' => $file,
                'title' => $request->title,
                'link' => $request->link,
            ]);
        } catch (Exception $e) {
            return $e;
        }
        $this->Logger->log('info', 'Cadastrou um parceiro com o titulo ' . $data->title);
        return redirect()->route('admin.partner.index')->with('create', '1');
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['data'] = Partner::find($id);
            $this->Logger->log('info', 'Visualizou um parceiro com o identificador ' . $id);
            return view('admin.partner.details.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['data'] = Partner::find($id);
            $this->Logger->log('info', 'Entrou em editar parceiro com o identificador ' . $id);
            return view('admin.Partner.edit.index', $response);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'link' => 'required|max:255',
                'logo' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            ],
            [
                'title' => 'Informar o título',
                'link' => 'Informar link',
                'logo' => 'Informar a imagem ',
            ]
        );
        $exists = Partner::where('title', $request['title'])->exists();
        if ($exists) {
            return redirect()->back()->with('exists', '1');
        }
        if ($file = $request->file('logo')) {
            $file = $file->store('partner_image');
        } else {
            $file = Partner::find($id)->logo;
        }
        try {
            Partner::find($id)->update(
                [
                    'logo' => $file,
                    'title' => $request->title,
                    'link' => $request->link,
                ]
            );
        } catch (Exception $e) {
            return $e;
        }
        $response['data'] = Partner::get();
        $this->Logger->log('info', 'Editou o parceiro com o identificador ' . $id);
        return redirect()->route('admin.partner.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um parceiro com o identificador ' . $id);
        Partner::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
