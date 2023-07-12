@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Documento')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.doc.index') }}"><u>Listar Documentos</u></a> > {{ $doc->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $doc->title }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                  
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-2">
                                            <b>Documento</b>
                                        </h5>
                                        <p class="text-dark text-justify">
                                            <a href="/storage/{{ $doc->path }}" target="_blank">
                                                <img src="/site/images/icons/pdf.png" alt="logo pdf">
                                            </a>
                                        </p>

                                    </div>
                               
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $doc->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $doc->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>
  

@endsection
