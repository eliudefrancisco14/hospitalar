<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        //
        $response['about'] = About::first();
        //Logger
        $this->Logger->log('info', 'Visualizou o sobre');
        return view('admin.about.details.index', $response);
    }

    public function edit($id)
    {
        $response['about'] = About::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar o sobre');
        return view('admin.about.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',

        ]);
        $about = About::find($id)->update([
            'title' => $request->title,
            'body' => $request->body,

        ]);
        //Logger
        $this->Logger->log('info', 'Editou o sobre');
        return redirect()->route('admin.about.show')->with('edit', '1');
    }
}
