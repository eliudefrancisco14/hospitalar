<footer id="footer" class="footer"
    style="background-image: url('{{ asset('site/img/circulo.png') }}'); background-position: center; 
background-size: cover;
background-repeat: no-repeat; ">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-12">
                <a href="{{ route('site.home') }}" class="logo d-flex align-items-center">
                    <img src="/site/img/mono-logo.svg" alt="logo" class=" ank" height="45">
                </a>

                <p>Instituto Nacional de Fomento da Sociedade da Informação</p>
                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/infosi.nacional" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/infosinacional/" class="linkedin "><i
                            class="bi bi-linkedin"></i></a>
                </div>


            </div>
            <div class="col-lg-3 col-md-4">

                <h4>INFOSI</h4>
                <a href="{{ route('site.about') }}" class="text-white-50 ank">Definição</a><br>
                <a href="{{ route('site.organization') }}" class="text-white-50 ank">Estrutura Orgânica</a><br>
                <a href="{{ route('site.regulation') }}" class="text-white-50 ank">Regulamentos</a><br>
                <a href="{{ route('site.contact') }}" class="text-white-50 ank">contactos</a><br>
            </div>

            <div class="col-lg-3 col-md-4 col-6 footer-links">
                <h4>Informações</h4>

                <a href="{{ route('site.news') }}" class="text-white-50 ank">Notícias</a><br>
                <a href="{{ route('site.image') }}" class="text-white-50 ank">Galeria de Imagens</a><br>
                <a href="{{ route('site.video') }}" class="text-white-50 ank">Galeria de Vídeos</a><br>


            </div>

            <div class="col-lg-3 col-md-4 footer-contact text-center text-md-start">
                <h4>Links Úteis</h4>

                <a href="https://governo.gov.ao/" target="_blank" class="text-white-50 ank">Portal do Governo de
                    Angola</a><br>
                <a href="https://minttics.gov.ao/ao/" target="_blank" class="text-white-50 ank">Ministério das
                    Telecomunicações, Tecnologia de Informação e Comunicação Social</a><br>
                <a href="https://digital.ao/ao/" target="_blank" class="text-white-50 ank">Digital.AO</a><br>
                <a href="https://igae.gov.ao/" target="_blank" class="text-white-50 ank">DNS.AO</a><br>


            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            <strong>INFOSI</strong> - 2023 &copy; Todos Direitos Reservados <br>
            <a href="{{ route('site.terms') }}" target="_blank" class="text-white-50 ank">Politícas de Privacidade &
                Termos de Uso</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div class="preloader-wrapper">
    <div class="preloader-wrapper">
        <div class="spinner-grow circle-infosi"></div>
    </div>
</div>
<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/site/vendor/aos/aos.js"></script>
<script src="/site/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/site/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/site/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/site/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/site/vendor/php-email-form/validate.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>

<!-- Template Main JS File -->
<script src="/site/js/main.js"></script>

@if (session('message'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sua Inscrição foi feita com sucesso!',
            showConfirmButton: true
        })
    </script>
@endif

@yield('JS')
