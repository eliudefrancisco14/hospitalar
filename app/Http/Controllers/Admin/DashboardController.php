<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{Log, User, Pacient};

class DashboardController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }


    public function index()
    {

        $response['count_users'] = User::count();
        $response['count_pacients'] = Pacient::count();

        $this->Logger->log('info', 'Entrou no Painel do Assistente Hospitalar');

        return view('admin.home.index', $response);
    }
}
