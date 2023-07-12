@extends('layouts.merge.dashboard')
@section('titulo', 'Logs de Atividades')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-md-6 col-12 col-lg-6">
                    <h2 class="h5 page-title">
                        Logs de Atividades
                    </h2>
                </div>
                <div class="col-md-6 col-12 col-lg-6 text-end text-right">
                    <a target="_blank" class="btn btn-primary" href="{{ route('admin.signup.print') }}">Imprimir Lista</a>
                </div>
            </div>

        </div>
    </div>
    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>UTLIZADOR</th>
                        <th>IP</th>

                        <th>DATA</th>
                        <th>DESCRIÇÃO</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($logs as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->user->name }} </td>
                            <td>{{ $item->REMOTE_ADDR }} </td>

                            <td class="text-center">{{ $item->created_at }} </td>
                            <td class="text-left">{{ $item->message }} </td>
                        
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>




@endsection
