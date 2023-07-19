@extends('layouts.merge.dashboard')

@section('title', 'Listar galeria de vídeo')

@section('content')

    <div class="container">

        <div class="content-wrapper">

            <div class="container justify-content-center mt-2 mb-5">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.video.create') }}"><i
                                    class="bx bx-user me-1"></i> Criar Vídeo</a>
                        </li>
                    </ul>

                    <!-- Bootstrap Table with Header - Dark -->
                    <div class="card">
                        <h5 class="card-header"> Galeria de vídeo: {{ $count }}</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 85%">TITULO</th>
                                        <th style="width: 10%">DATA CRIAÇÃO</th>
                                        <th>ACÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $video->title }} </td>
                                            <td>{{ $video->created_at }} </td>
                                            @csrf
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/video/show/{$video->id}") }}"><i
                                                                class="bx bx-detail"></i> Detalhe</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/video/edit/{$video->id}") }}"><i
                                                                class="bx bx-edit-alt me-1"></i> Editar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url("admin/video/delete/{$video->id}") }}"><i
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
