@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Vídeo')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.video.index') }}"><u>Listar Vídeos</u></a> > {{ $video->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $video->title}}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-10">
                                        <div class="row align-items-center my-4">
                                            <div class="col">
                                                <h2 class="page-title">Link do Vídeo</h2>
                                                <a href="{{$video->link}}" target="_blank">{{$video->link}}</a>
                                                <div class="col-lg-4 col-md-6 ">
                                                    <div class="ud-single-blog ">
                                                        <iframe class="img-fluid img-center " width="400 " height="250 "
                                                            src="{{$video->link}} " frameborder="0 "
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture "
                                                            allowfullscreen>
                                                        </iframe>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- .card-deck -->
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $video->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $video->updated_at }}
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
