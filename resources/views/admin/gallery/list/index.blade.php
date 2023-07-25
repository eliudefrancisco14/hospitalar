@extends('layouts.merge.dashboard')

@section('title', 'Listar galeria')

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
                                <div class="card-body">
                                    <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                        <thead class="bg-primary ">
                                            <tr class="text-center text-ligth">
                                                <th>#</th>
                                                <th style="width: 85%">NOME</th>
                                                <th style="width: 10%">DATA CRIAÇÃO</th>
                                                <th>ACÇÕES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">

                                            @foreach ($data as $item)
                                                <tr class="text-center text-dark">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }} </td>
                                                    <td>{{ $item->created_at }} </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown">
                                                                <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                                            </button>

                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/gallery/show/{$item->id}") }}"><i
                                                                        class="bx bx-detail"></i> Detalhe</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/gallery/edit/{$item->id}") }}"><i
                                                                        class="bx bx-edit-alt me-1"></i> Editar</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/gallery/delete/{$item->id}") }}"><i
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