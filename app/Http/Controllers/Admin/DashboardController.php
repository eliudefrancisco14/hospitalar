<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Gallery;
use App\Models\Log;
use App\Models\Signup;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //dd("Estou por Dentro");
        //Logger
        //$this->Logger->log('info', 'Entrou no Painel Administrativo');

        return view('admin.home.index');
    }
}
