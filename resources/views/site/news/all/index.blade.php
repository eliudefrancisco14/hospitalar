@extends('layouts.merge.site')
@section('title', 'Notícias')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Notícias</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->


    <main id="main">
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">

            <div class="section-header">
                <p>Notícias do INFOSI </p>
            </div>

          <div class="container" data-aos="fade-up">
    
            <div class="row gy-4 posts-list">
    
              <div class="col-xl-4 col-md-6">
                <article>
    
                  <div class="post-img">
                    <img src="/site/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>
    
                  <p class="post-category">Politics</p>
    
                  <h2 class="title">
                    <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                  </h2>
    
                  <div class="d-flex align-items-center">
                    <img src="/site/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Maria Doe</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jan 1, 2022</time>
                      </p>
                    </div>
                  </div>
    
                </article>
              </div><!-- End post list item -->
    
              <div class="col-xl-4 col-md-6">
                <article>
    
                  <div class="post-img">
                    <img src="/site/img/blog/blog-2.jpg" alt="" class="img-fluid">
                  </div>
    
                  <p class="post-category">Sports</p>
    
                  <h2 class="title">
                    <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>
    
                  <div class="d-flex align-items-center">
                    <img src="/site/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Allisa Mayer</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jun 5, 2022</time>
                      </p>
                    </div>
                  </div>
    
                </article>
              </div><!-- End post list item -->
    
              <div class="col-xl-4 col-md-6">
                <article>
    
                  <div class="post-img">
                    <img src="/site/img/blog/blog-3.jpg" alt="" class="img-fluid">
                  </div>
    
                  <p class="post-category">Entertainment</p>
    
                  <h2 class="title">
                    <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                  </h2>
    
                  <div class="d-flex align-items-center">
                    <img src="/site/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Mark Dower</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jun 22, 2022</time>
                      </p>
                    </div>
                  </div>
    
                </article>
              </div><!-- End post list item -->
    
            </div><!-- End blog posts list -->
    
            {{--  <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->  --}}
    
          </div>
        </section><!-- End Blog Section -->

    </main>
@endsection
