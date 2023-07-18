@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.Navbar')

                <div class="container justify-content-center mt-2 mb-5">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.user.create') }}"><i class="bx bx-user me-1"></i> Criar Conta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.user.index') }}"><i class="bx bx-link-alt me-1"></i>
                                Lista</a>
                        </li>
                    </ul>
                    <h2 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Informação:
                        {{ $user->name }}</h2>
                    <hr>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row mt-5 align-items-center">
                                    <div class="col-md-3 text-center mb-5">
                                        <div class=" rounded-circle ml-5 bg-primary" style="height: 150px; width:150px;">
                                            <h1 class="text-white p-5 " style="font-size: 65px">{{ $user->name[0] }}
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-md-7">
                                                <h4 class="mb-1">{{ $user->email }}</h4>
                                                <p class="small mb-3">
                                                    <span class="badge badge-dark">Data de Criação:
                                                        {{ $user->created_at }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <h4 class="mb-1">
                                                    <b>Permissão:</b>
                                                    {{ $user->level }}

                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.col-12 -->
                            </div> <!-- .row -->
                        </div> <!-- .container-fluid -->
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr class="text-center">
                                                <th>ID</th>
                                                <th>NIVEL</th>
                                                <th>IP</th>

                                                <th>DATA</th>
                                                <th>DESCRIÇÃO</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">

                                            @foreach ($logs as $item)
                                                <tr class="text-center text-dark">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->level }} </td>
                                                    <td>{{ $item->REMOTE_ADDR }} </td>

                                                    <td class="text-center">{{ $item->created_at }} </td>
                                                    <td class="text-left">{{ $item->message }} </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
