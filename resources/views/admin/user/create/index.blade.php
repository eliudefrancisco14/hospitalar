@extends('layouts.merge.dashboard')

@section('title', 'Cadastrar Conta')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

<<<<<<< HEAD
                <div class="container justify-content-center mt-2 mb-5">
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
=======
                <div class="container justify-content-center mt-4 mb-5">
                    @include('errors.form')
>>>>>>> dc02d32803cc136b65488620d78959472cfa730a
                    <div class="row align-items-center">
                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            @include('forms._formUser.index')
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


