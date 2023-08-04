<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Classes\Logger;
use App\Models\{Log, User};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, Hash};

class UserController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['data'] = User::get();
        $response['count'] = User::count();
        $this->Logger->log('info', 'Listou os Utilizadores');
        return view('admin.user.list.index', $response);
    }

    public function create()
    {
        return view('admin.user.create.index');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'password' => [
                    'required',
                    'confirmed',
                    'min:8',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#@%]).*$/'
                ],
                'level' => 'required',
            ],
            [
                'name.required' => 'Inserir o primeiro nome',
                'email.required' => 'Inserir o e-mail',
                'password.required' => 'Inserir a senha',
                'level.required' => 'Inserir o nível de permissão',
            ]
        );
        $exists_email = User::where('email', $request['email'])->exists();
        if ($exists_email) {
            return redirect()->back()->with('exist_email', '1');
        }
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $level = $request->input('level');

        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'level' => $level,
        );
        try {
            User::create($data);
        } catch (Exception $e) {
            return redirect()->back()->with('catch', '1');
        }
        return redirect()->back()->with('create', '1');
        $this->Logger->log('info', 'Cadastrou utilizador: ' . $request['name']);
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->paginate(30);
            $response['data'] = User::find($id);
            $this->Logger->log('info', 'Visualizou um Utilizador com o identificador ' . $id);
            return view('admin.user.details.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['data'] = User::find($id);
            $this->Logger->log('info', 'Entrou em editar um Utilizador com o identificador ' . $id);
            return view('admin.user.edit.index', $response);
        }
    }

    public function edits($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['data'] = User::find($id);
            $this->Logger->log('info', 'Entrou em editar senha um Utilizador com o identificador ' . $id);
            return view('admin.user.edit.indexs', $response);
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => [
                    'required',
                    'confirmed',
                    'min:8',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#@%]).*$/',
                    Rules\Password::defaults()
                ],
            ]);
            $exists_email = User::where('email', $request['email'])->exists();
            if ($exists_email) {
                return redirect()->back()->with('exist_email', '1');
            }
            try {
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'level' => $request->level,
                    'password' => Hash::make($request->password),
                ]);
            } catch (Exception $e) {
                return redirect()->back()->with('catch', '1');
            }
            $this->Logger->log('info', 'Editou um Utilizador com o identificador ' . $id);
            return redirect()->route('admin.user.index')->with('edit', '1');
        }
    }

    public function updates(Request $request, $id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $request->validate([
                'password' => [
                    'required',
                    'confirmed',
                    'min:8',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#@%]).*$/',
                    Rules\Password::defaults()
                ],
            ]);
            try {
                User::find($id)->update([
                    'password' => Hash::make($request->password),
                ]);
            } catch (Exception $e) {
                return redirect()->back()->with('catch', '1');
            }
            $this->Logger->log('info', 'Editou senha um Utilizador com o identificador ' . $id);
            return redirect()->route('admin.user.index')->with('edit', '1');
        }
    }

    public function destroy($id)
    {
        $count = User::count();
        if ($count > 1) {
            try {
                User::find($id)->delete();
            } catch (Exception $e) {
                return redirect()->back()->with('catch', '1');
            }
            $this->Logger->log('info', 'Eliminou um Utilizador com o identificador ' . $id);
            return redirect()->back()->with('destroy', '1');
        } else {
            return redirect()->back();
        }
    }
}
