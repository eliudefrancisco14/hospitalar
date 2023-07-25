@extends('layouts.merge.dashboard')

@section('title', 'Lista de Inscrições de Estágio')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
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
                                    <h3>Lista de Inscrições de Estágio</h3>
                                    <hr>
                                    <table class="table datatables table-hover table-bordered" id="dataTable-1">
                                        <thead class="bg-primary ">
                                            <tr class="text-center text-ligth">
                                                <th style="color: #fff;">#</th>
                                                <th style="width: 100%; color: #fff;">nome</th>
                                                <th style="width: 100%; color: #fff;">email</th>
                                                <th style="width: 100%; color: #fff;">telefone</th>
                                                <th style="color: #fff;">ACÇÕES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">

                                            @foreach ($internships as $item)
                                                <tr class="text-center text-dark">
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }} </td>
                                                    <td>{{ $item->email }} </td>
                                                    <td>{{ $item->phone }} </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary btn-sm dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown">
                                                                <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/definition/show/{$item->id}") }}"><i
                                                                        class="bx bx-detail"></i> Detalhe</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ url("admin/definition/delete/{$item->id}") }}"><i
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