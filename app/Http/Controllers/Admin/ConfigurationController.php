<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
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
        $response['configuration'] = Configuration::first();
        //Logger
        $this->Logger->log('info', 'Visualizou as configurações');
        return view('admin.configuration.details.index', $response);
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
        $response['configuration'] = Configuration::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar as configurações');
        return view('admin.configuration.edit.index', $response);
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

            'telefone' => 'max:255',
            'email' => 'max:255',
            'address' => 'max:255',
        ]);

        Configuration::find($id)->update([
            'address' => $request->address,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou as configurações');

        return redirect()->route('admin.configuration.show')->with('edit', '1');
    }
}
