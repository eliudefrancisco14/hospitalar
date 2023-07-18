@extends('layouts.merge.dashboard')
@section('title', 'Cadastrar contacto interno')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.Navbar')

                <div class="container justify-content-center mt-2 mb-5">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configurar contacto interno</span></h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.contact.store') }}" method="POST" class="row">
                        @csrf
                        @include('forms._formContact.index')
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



@endsection
