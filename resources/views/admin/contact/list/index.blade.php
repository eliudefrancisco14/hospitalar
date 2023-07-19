@extends('layouts.merge.dashboard')

@section('title', 'Listar contacto interno')

@section('content')

    <div class="container">

        <div class="content-wrapper">

            <div class="container justify-content-center mt-2 mb-5">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.contact.create') }}"><i
                                    class="bx bx-user me-1"></i> Criar contacto</a>
                        </li>
                    </ul>

                    <!-- Bootstrap Table with Header - Dark -->
                    <div class="card">
                        <h5 class="card-header"> Contacto: {{ $count }}</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 20%">Telefone</th>
                                        <th style="width: 100%">Email</th>
                                        <th style="width: 10%">DATA CRIAÇÃO</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($data as $datas)
                                        <tr>
                                            <td>{{ $datas->telephone }} </td>
                                            <td>{{ $datas->email }} </td>
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
                                                            href="{{ url("admin/contact/show/{$datas->id}") }}"><i
                                                                class="bx bx-detail"></i> Detalhe</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/contact/edit/{$datas->id}") }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Editar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/contact/delete/{$datas->id}") }}"><i
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
