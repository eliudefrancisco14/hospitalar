@extends('layouts.merge.dashboard')
@section('title', 'Editar Senha')
@section('content')

    <div class="container">

        <div class="container justify-content-center mt-2 mb-5">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Editar Senha /</span>
                    {{ $users->name }}</h4>
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

                    <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST"
                        action="{{ route('admin.user.updates', $users->id) }}">
                        @csrf
                        @method('PUT')
                        @include('forms._formUser.indexs')
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