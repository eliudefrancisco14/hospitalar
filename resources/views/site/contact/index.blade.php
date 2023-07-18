@extends('layouts.merge.site')
@section('title', 'Contacte-nos')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero"
        style=" background-image: url({{ url('site/img/banner-infosi.jpg') }}); background-position: center;  background-size: cover; background-repeat: no-repeat;">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Contactos</h2>
                        <p class="py-3">
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="breadcrumbs">
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li>Contacte-nos</li>
                    </ol>
                </div>
            </nav>
        </div>

    </section>
    <!-- End Hero Section -->
    

    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contactos</h2>
                    <p>Pode Entrar em Contacto Connosco apartir dos seguintes terminais </p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main>
@endsection
