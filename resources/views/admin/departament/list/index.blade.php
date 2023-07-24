@extends('layouts.merge.dashboard')

@section('title', 'Listar departamento')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                
                <!-- Navbar -->
                @include('layouts._includes.dashboard.NavbarSimple')
                <!-- / Navbar -->

                <div class="container justify-content-center mt-2 mb-5">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('admin.department.create') }}"><i
                                        class="bx bx-user me-1"></i> Criar departamento</a>
                            </li>
                        </ul>

                        <!-- Bootstrap Table with Header - Dark -->
                        <div class="card">
                            <h5 class="card-header"> Contacto: {{ $count }}</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th style="width: 20%">Nome</th>
                                            <th style="width: 100%">Responsável</th>
                                            <th style="width: 10%">DATA CRIAÇÃO</th>
                                            <th>ACÇÕES</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->name }} </td>
                                                <td>{{ $item->boss }} </td>
                                                <td>{{ $item->created_at }} </td>
                                                @csrf
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ url("admin/department/show/{$item->id}") }}"><i
                                                                    class="bx bx-detail"></i> Detalhe</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url("admin/department/edit/{$item->id}") }}"><i
                                                                    class="bx bx-edit-alt me-1"></i> Editar</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url("admin/department/delete/{$item->id}") }}"><i
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
@endsection
