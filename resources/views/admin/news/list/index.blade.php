@extends('layouts.merge.dashboard')

@section('title', 'Listar galeria de noticia')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <form action="{{ route('admin.news.newsSearch') }}" method="GET">
                                    @csrf
                                    <input type="text" class="form-control border-0 shadow-none" name="searchText"
                                        placeholder="Pesquisar..." aria-label="Pesquisar..." />
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{ url('dashboard/assets/img/avatars/1.png') }}" alt
                                                    class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                            <small class="text-muted">{{ Auth::user()->level }}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">
                                    <i class="bx bx-cog me-2"></i>
                                    <span class="align-middle">Configurações</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Terminar sessão</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <div class="container justify-content-center mt-2 mb-5">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('admin.news.create') }}"><i
                                        class="bx bx-user me-1"></i> Criar noticia</a>
                            </li>
                        </ul>

                        <!-- Bootstrap Table with Header - Dark -->
                        <div class="card">
                            <h5 class="card-header"> Galeria de noticia: {{ $count }}</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead class="table-dark">
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
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
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
@endsection
