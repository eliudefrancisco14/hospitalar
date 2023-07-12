@extends('layouts.merge.site')
@section('titulo', 'Galeria')
@section('content')
    <main>
        <section class="pb-4 pt-12 bg-primary" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <a href="{{ route('site.gallery') }}">
                            <h1 class="text-white"> Galeria de Imagem</h1>
                        </a>

                        <p class="text-white">{{ $gallery->name }}</p>
                    </div>
                </div>
            </div>
          
        </section>
        @include('extra._culture.index')

        <!-- ====== gallery  ====== -->

        <section class="pt-5 pt-lg-5">
            <div class=container>
                <div class="row">

                    @foreach ($images as $item)
                    

                        <div class="example-2 card detail grid-item branding col-lg-4 col-md-6  pb-5">
                            <a href="/storage/{{ $item->path}}" data-fancybox="gallery1">
                            <div class="wrapper shadow image"
                                style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;'>
                               
                            </div>
                        </a>
                        </div>
                    @endforeach
                   
                </div>
                <nav class="blog-pagination justify-content-center d-flex mt-0">
                    <b>  {{ $images->links() }}</b>
                  </nav>
            </div>
        </section>
        
        <!-- ====== gallery End ====== -->
    </main>



@endsection
@section('CSSJS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection
