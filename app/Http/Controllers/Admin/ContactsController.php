<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Classes\Logger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function show()
    {
        $response['contact'] = Contact::first();
        $this->Logger->log('info', 'Visualizou o contacto');
        return view('admin.contact.details.index', $response);
    }

    public function edit()
    {
        $response['contact'] = Contact::first();
        $this->Logger->log('info', 'Entrou em editar o contacto');
        return view('admin.contact.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'address' => 'required|min:5|max:255',
                'telephone' => 'required|min:9',
                'email' => 'required|min:5|max:255',
            ],
            [
                'address.required' => 'Informar o endereço',
                'telephone.required' => 'Informar o número de telefone',
                'email.required' => 'Informar o e-mail',
            ]
        );
        Contact::find($id)->update([
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);
        $this->Logger->log('info', 'Editou um contacto com o identificador ' . $id);
        return redirect()->route('admin.contact.show')->with('edit', '1');
    }


}
