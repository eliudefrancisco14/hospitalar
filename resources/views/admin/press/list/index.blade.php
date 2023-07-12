@extends('layouts.merge.dashboard')
@section('titulo', 'Lista De Inscrições')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-md-6 col-12 col-lg-6">
                    <h2 class="h5 page-title">
                        Lista De Jornalistas Inscritos no CIAM
                    </h2>
                </div>
            </div>

        </div>
    </div>
    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-left">
                        <th class="text-center">#</th>
                        <th>PASSAPORTE/BI</th>
                        <th>NOME</th>
                        <th>SEXO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    
                    @foreach ($press as $item)
                        <tr class="text-dark">
                            <td class="text-center">{{ $item['id'] }}</td>
                            <td>{{ $item['NumeroPassaporte'] }}</td>
                            <td>{{ $item['NomeCompleto'] }}</td>
                            
                            <td>{{ $item['Sexo'] }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href='{{ route('admin.press.show', $item["id"]) }}'
                                            class="dropdown-item">Detalhes</a>

                                        @if ('USP' == Auth::user()->level)
                                            <a href='{{ route('admin.press.print', $item["id"]) }}'
                                                class="dropdown-item" target='_blank'>Imprimir Credencial</a>
                                        @endif

                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>




@endsection

