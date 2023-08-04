<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use App\Models\Internship;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['interships'] = Internship::OrderBy('id','desc')->get();
        return view('admin.intership.list.index', $response);
    }

    public function show($id)
    {
        $response['intership'] = Internship::find($id);
        return view('admin.intership.details.index', $response);
    }

    public function destroy($id)
    {
        try {
            Internship::find($id)->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        $this->Logger->log('info', 'Eliminou uma Inscrição com o identificador ' . $id);
        return redirect()->route('admin.intership.index')->with('destroy', '1');
    }
}
