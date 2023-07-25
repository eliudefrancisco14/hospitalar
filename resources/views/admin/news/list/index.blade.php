@extends('layouts.merge.dashboard')

@section('title', 'Listar galeria de noticia')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts._includes.dashboard.NavbarSimple')
                <!-- / Navbar -->

                <div class="container justify-content-center mt-2 mb-5">
                    <div class="flex-grow-1 container-p-y">

                        <!-- Bootstrap Table with Header - Dark -->
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <div class="card-body">
                                    <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                        <thead class="bg-primary ">
                                            <tr class="text-center text-ligth">
                                            <tr>
                                                <th style="width: 85%">TITULO</th>
                                                <th style="width: 20%">ESTADO</th>
                                                <th style="width: 10%">DATA CRIAÇÃO</th>
                                                <th>AÇÕES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->title }} </td>
                                                    <td>{{ $item->state }} </td>
                                                    <td>{{ $item->created_at }} </td>
                                                    @csrf
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                                data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/news/show/{$item->id}") }}"><i
                                                                        class="bx bx-detail"></i> Detalhe</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/news/edit/{$item->id}") }}"><i
                                                                        class="bx bx-edit-alt me-1"></i> Editar</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/news/delete/{$item->id}") }}"><i
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
