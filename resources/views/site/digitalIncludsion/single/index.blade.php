@extends('layouts.merge.site')
@section('title', 'Inclusão Digital')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Inclusão Digital "{{ $digitalInclusion->name }}"</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>{{ $digitalInclusion->description }} </p>
                </div>
                <div class="row gy-4 posts-list">


                    @foreach ($imageDigitalInclusions as $item)
                        <div class="col-xl-4 col-md-6">

                            <div class="text-white my">
                                <img src="{{ url("/storage/$item->path") }}" class="card-img img-fluid rounded-4 mb-4"
                                    alt="{{ $digitalInclusion->name }}">
                            </div>
                        </div><!-- End post list item -->
                    @endforeach



                </div><!-- End blog posts list -->

                <nav class="justify-content-center d-flex mt-0">
                    <b> {{ $imageDigitalInclusions->links() }}</b>
                </nav>

            </div>
        </section><!-- End Blog Section -->
    </main>
@endsection
