@extends('layouts.merge.dashboard')

@section('title', ' - Registar Utilizador')

@section('content')

    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf
        @include('forms._formUser.index')
    </form>

@endsection
