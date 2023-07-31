@extends('layouts.merge.dashboard')

@section('title', 'Editar Configuração')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="page-title">
                                <a href="{{ route('admin.contact.show') }}">Ver Informações</a>
                                > Editar Informações
                            </h5>
                        </div>
                    </div>
                    @include('errors.form')
                    <div class="row align-items-center">
                        <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST"
                            action="{{ route('admin.contact.update', $contact->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('forms._formContact.index')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
