@extends('layouts.merge.dashboard')
@section('title', 'Cadastrar província')

@section('content')

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts._includes.dashboard.NavbarSimple')

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
                    <form action="{{ route('admin.province.store') }}" method="POST">
                        @csrf
                        @include('forms._formProvince.index')
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
