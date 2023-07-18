@extends('layouts.merge.dashboard')

@section('title', 'Listar pergunta')

@section('content')

    <div class="container">

        <div class="content-wrapper">

            <div class="container justify-content-center mt-2 mb-5">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.asks.create') }}"><i
                                    class="bx bx-user me-1"></i> Criar pergunta</a>
                        </li>
                    </ul>

                    <!-- Bootstrap Table with Header - Dark -->
                    <div class="card">
                        <h5 class="card-header"> Perquenta: {{ $count }}</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 100%">Pergunta</th>
                                        <th style="width: 10%">DATA CRIAÇÃO</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($data as $datas)
                                        <tr>
                                            <td>{{ $datas->asks }} </td>
                                            <td>{{ $datas->created_at }} </td>
                                            @csrf
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/asks/show/{$datas->id}") }}"><i
                                                                class="bx bx-detail"></i> Detalhe</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/asks/edit/{$datas->id}") }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Editar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/asks/delete/{$datas->id}") }}"><i
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
@endsection