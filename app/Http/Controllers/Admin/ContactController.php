<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['data'] = Contact::get();
        $response['count'] = Contact::count();
        $this->Logger->log('info', 'Listou contacto');
        return view('admin.contact.list.index', $response);
    }

    public function create()
    {
        $this->Logger->log('info', 'Entrou em cadastrar contacto');
        return view('admin.contact.create.index');
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'address' => 'required|min:5|max:255',
            'telephone' => 'required|min:9',
            'email' => 'required|min:5|max:255',
        ],
        [
            'address.required' => 'Informar o endereço',
            'telephone.required' => 'Informar o número de telefone',
            'email.required' => 'Informar o e-mail',
        ]);
        $data = Contact::create([
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,


        ]);
        $this->Logger->log('info', 'Cadastrou um contacto ' . $data->email);
        return redirect()->route('admin.contact.index')->with('create', '1');
    }

    public function show($id)
    {
        $response['data'] = Contact::find($id);
        $response['count'] = Contact::count();
        
        $this->Logger->log('info', 'Visualizou um contacto com o identificador ' . $id);
        return view('admin.contact.details.index', $response);
    }

    public function edit($id)
    {
        $response['data'] = Contact::find($id);
        $this->Logger->log('info', 'Entrou em editar um contacto com o identificador ' . $id);
        return view('admin.contact.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'address' => 'required|min:5|max:255',
            'telephone' => 'required|min:9',
            'email' => 'required|min:5|max:255',
        ],
        [
            'address.required' => 'Informar o endereço',
            'telephone.required' => 'Informar o número de telefone',
            'email.required' => 'Informar o e-mail',
        ]);
        Contact::find($id)->update([
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);
        $this->Logger->log('info', 'Editou um contacto com o identificador ' . $id);
        return redirect()->route('admin.contact.index')->with('edit', '1');
    }

    public function destroy($id)
    {
        $this->Logger->log('info', 'Eliminou um contacto com o identificador ' . $id);
        Contact::find($id)->delete();
        return redirect()->route('admin.contact.index')->with('destroy', '1');
    }
}
