@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar logotipo do parceiro')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

                <div class="container justify-content-center mt-4 mb-5">
                    @include('errors.form')
                    <div class="row align-items-center">
                        <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('forms._formPartner.index')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
