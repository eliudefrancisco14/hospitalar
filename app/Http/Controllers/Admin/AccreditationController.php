<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['accreditations'] = Accreditation::get();
        //Logger
        $this->Logger->log('info', 'Listou Acreditação');
        return view('admin.accreditation.list.index', $response);
    }

    public function show()
    {
        $response['accreditation'] = Accreditation::first();;
        $this->Logger->log('info', 'Visualizou Acreditação');
        return view('admin.accreditation.details.index', $response);
    }

    public function edit($id)
    {
        $response['about'] = Accreditation::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar Acreditação');
        return view('admin.accreditation.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'body' => 'required|min:20|',
        ]);

        $accreditation = Accreditation::find($id)->update([
            'body' => $request->body,
        ]);

        $this->Logger->log('info', 'Editou  uma acreditação com o identificador' . $id);
        return redirect()->route('admin.accreditation.show')->with('edit', '1');
    }
}
