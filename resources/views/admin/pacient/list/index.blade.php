@extends('layouts.merge.dashboard')

@section('title', 'Listar Paciente')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts._includes.dashboard.NavbarSimple')
                <!-- / Navbar -->

                <div class="container justify-content-center mt-4 mb-5">
                    <div class="flex-grow-1 container-p-y">
                        <!-- Bootstrap Table with Header - Dark -->
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <div class="card-header text-end">
                                    <a class="btn btn-primary btn-sm mb-2 text-white" target="_blank" href="{{ url("admin/pacient/pdf/list/") }}">
                                        <i class="fa fa-print fa-pdf"></i>Imprimir Lista
                                    </a>
                                </div>
                                <div class="card-body">
                                    <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                        <thead class="bg-primary text-light">
                                            <tr class="text-center">
                                                <th style="color:#fff">#</th>
                                                <th style="width: 60%;color:#fff">Nome</th>
                                                <th style="width: 15%;color:#fff">Data de Nascimento</th>
                                                <th style="width: 15%;color:#fff">Nº do BI</th>
                                                <th style="width: 10%;color:#fff">DATA CRIAÇÃO</th>
                                                <th style="color:#fff">ACÇÕES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">

                                            @foreach ($data as $item)
                                                <tr class="text-center text-dark">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->nomeCompleto }} </td>
                                                    <td>{{ $item->dataNascimento }} </td>
                                                    <td>{{ $item->nBI }} </td>
                                                    <td>{{ $item->created_at }} </td>
                                                    <td>
                                                    
                                                        <a class="btn btn-primary btn-sm mb-2 text-white" target="_blank" href="{{ url("admin/pacient/pdf/show/$item->id") }}">
                                                            <i class="fa fa-print fa-pdf"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown">
                                                                <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                                            </button>

                                                            <div class="dropdown-menu">
                                                            
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/pacient/show/{$item->id}") }}"><i
                                                                        class="bx bx-detail"></i> Detalhes</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/pacient/edit/{$item->id}") }}"><i
                                                                        class="bx bx-edit-alt me-1"></i> Editar</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/pacient/delete/{$item->id}") }}"><i
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection