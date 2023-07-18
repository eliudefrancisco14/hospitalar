@extends('layouts.merge.dashboard')

@section('title', 'Registar Conta')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.Navbar')

                <div class="container justify-content-center mt-2 mb-5">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurar Conta /</span>
                        Conta</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                    <div class="row align-items-center">
                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            @include('forms._formUser.index')
                            <div class="container">
                                <div class="row">
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Salvar
                                            alterações</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
