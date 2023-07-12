<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ScheduleIndustrialization;
use Illuminate\Http\Request;

class ScheduleIndustrializationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['schedules'] = ScheduleIndustrialization::get();
        //Logger
        $this->Logger->log('info', 'Listou os Programas & Actividades');
        return view('admin.ScheduleIndustrialization.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar evento');
        return view('admin.ScheduleIndustrialization.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'program' => 'required|string',
            'day' => 'required|string',
            'start' => 'required',
            'end' => 'required',
            'responsible' => 'required',
        ]);

        $schedule = ScheduleIndustrialization::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou um Evento com o titulo ' . $schedule->program);

        return redirect("admin/ScheduleIndustrialization/show/$schedule->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['schedule'] = ScheduleIndustrialization::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizar um Evento com o identificador ' . $id);
        return view('admin.ScheduleIndustrialization.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['schedule'] = ScheduleIndustrialization::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Evento com o identificador ' . $id);
        return view('admin.ScheduleIndustrialization.edit.index', $response);
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
            'program' => 'required|string',
            'day' => 'required|string',
            'start' => 'required',
            'end' => 'required',
            'responsible' => 'required',
        ]);


        ScheduleIndustrialization::find($id)->update($request->all());
        //Logger
        $this->Logger->log('info', 'Editou um Evento com o identificador ' . $id);
        return redirect("admin/ScheduleIndustrialization/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um Evento com o identificador ' . $id);
        ScheduleIndustrialization::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
