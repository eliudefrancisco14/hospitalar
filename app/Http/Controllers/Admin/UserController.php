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
                'password' => 'required',
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
            return $e;
        }
        return redirect()->back()->with('create', '1');
        $this->Logger->log('info', 'Cadastrou utilizador: ' . $request['name']);
    }

    public function show($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['logs'] = Log::where('USER_ID', $id)->orderBy('id', 'desc')->get();
            $response['user'] = User::find($id);
            $this->Logger->log('info', 'Visualizou um Utilizador com o identificador ' . $id);
            return view('admin.user.details.index', $response);
        }
    }

    public function edit($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['users'] = User::find($id);
            $this->Logger->log('info', 'Entrou em editar um Utilizador com o identificador ' . $id);
            return view('admin.user.edit.index', $response);
        }
    }

    public function edits($id)
    {
        if (Auth::user()->level != 'Administrador' && Auth::user()->id != $id) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        } else {
            $response['users'] = User::find($id);
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
                'password' => ['required', Rules\Password::defaults()],
            ]);
            $exists_email = User::where('email', $request['email'])->exists();
            if ($exists_email) {
                return redirect()->back()->with('exist_email', '1');
            }
            $user = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => Hash::make($request->password),
            ]);
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
                'password' => ['required', Rules\Password::defaults()],
            ]);
            $user = User::find($id)->update([
                'password' => Hash::make($request->password),
            ]);
            $this->Logger->log('info', 'Editou senha um Utilizador com o identificador ' . $id);
            return redirect()->route('admin.user.index')->with('edit', '1');
        }
    }

    public function destroy($id)
    {
        $count = User::count();

        if ($count > 1) {
            $this->Logger->log('info', 'Eliminou um Utilizador com o identificador ' . $id);
            User::find($id)->delete();
            return redirect()->back()->with('destroy', '1');
        } else {
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $searchText = $request->get('searchText');
        $count = User::count();
        $data = User::where('name', "Like", "%" . $searchText . "%")->Orwhere('email', $searchText)->OrderBy('name', 'asc')->paginate(5);
        return view('admin.user.list.index', compact('data', 'count'));
        $this->Logger->log('info', 'Efectuou uma pesquisa em utilizador');
    }
}
