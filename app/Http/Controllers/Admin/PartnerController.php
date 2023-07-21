<?php

namespace App\Http\Controllers\Admin;

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
                'title' => 'required|min:5|max:255',
                'link' => 'required|min:5|max:255',
                'logo' => 'mimes:jpg,png,jpeg',
            ]
        );
        $file = $request->file('logo')->store('partner_image');
        $data = Partner::create([
            'logo' => $file,
            'title' => $request->title,
            'link' => $request->link,
        ]);
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
        $this->validate(
            $request,
            [
                'title' => 'required|min:5|max:255',
                'link' => 'required|min:5|max:255',
                'logo' => 'mimes:jpg,png,jpeg',
            ]
        );
        if ($file = $request->file('logo')) {
            $file = $file->store('partner_image');
        } else {
            $file = Partner::find($id)->logo;
        }
        Partner::find($id)->update(
            [
                'logo' => $file,
                'title' => $request->title,
                'link' => $request->link,
            ]
        );
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

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = Partner::count();
        $data = Partner::where('title', "Like", "%" . $searchText . "%")
            ->orwhere('link', "Like", "%" . $searchText . "%")
            ->OrderBy('id', 'desc')->paginate(5);
        return view('admin.partner.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em parceiro');
    }
}
