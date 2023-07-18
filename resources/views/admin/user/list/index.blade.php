@extends('layouts.merge.dashboard')

@section('title', 'Listar Utilizador')

@section('content')

    <div class="container">

        <div class="content-wrapper">

            <div class="container justify-content-center mt-2 mb-5">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.user.create') }}"><i class="bx bx-user me-1"></i> Criar Conta</a>
                        </li>
                    </ul>
                    
                        <!-- Bootstrap Table with Header - Dark -->
                        <div class="card">
                            <h5 class="card-header"> Lista de Utilizadores: {{ $count }}</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>NOME</th>
                                            <th>EMAIL</th>
                                            <th>DATA CRIAÇÃO</th>
                                            <th>NÍVEL DE ACESSO</th>
                                            <th>ACÇÕES</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($users as $item)
                                        <tr>
                                            <td>{{ $item->name }} </td>
                                            <td>{{ $item->email }} </td>
                                            <td>{{ $item->created_at }} </td>
                                            <td><span class="badge bg-label-primary me-1">{{ $item->level }}</span></td>
                                            @csrf
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ url("admin/user/show/{$item->id}") }}"><i
                                                                class="bx bx-detail"></i> Detalhe</a>
                                                     <a class="dropdown-item" href="{{ url("admin/user/edit/{$item->id}") }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Editar</a>
                                                                <a class="dropdown-item" href="{{ url("admin/user/edits/{$item->id}") }}"><i
                                                                    class="bx bxs-key"></i> Senha</a>
                                                                <a class="dropdown-item" href="{{ url("admin/user/delete/{$item->id}") }}"><i
                                                                    class="bx bx-trash me-1"></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Bootstrap Table with Header Dark -->
                </div>
            </div>
        </div>
    @endsection
