<footer id="footer" class="footer"
    style="background-image: url('{{ asset('site/img/circulo.png') }}'); background-position: center; 
background-size: cover;
background-repeat: no-repeat; ">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 col-md-12">
                <a href="{{ route('site.home') }}" class="logo d-flex align-items-center">
                    <img src="/site/img/mono-logo.svg" alt="logo" class="" height="45">
                </a>

                <p>O Instituto Nacional de Fomento da Sociedade de Informação- INFOSI, é um Instituto público de
                    prestação de serviço com carácter científico e desenvolvimento tecnológico, tutelado pelo Ministério
                    das Telecomunicações, Tecnologia da Informação e Comunicação Social.</p>
                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/infosi.nacional" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/infosinacional/" class="linkedin"><i
                            class="bi bi-linkedin"></i></a>
                </div>


            </div>
            <div class="col-lg-2 col-md-4">

                <h4>INFOSI</h4>
                <a href="{{ route('site.about') }}" class="text-white-50">Definição</a><br>
                <a href="{{ route('site.organization.all') }}" class="text-white-50">Estrutura Orgânica</a><br>
                <a href="{{ route('site.regulation') }}" class="text-white-50">Regulamentos</a><br>
                <a href="{{ route('site.contact') }}" class="text-white-50">contactos</a><br>
            </div>

            <div class="col-lg-2 col-md-4 col-6 footer-links">
                <h4>Informações</h4>

                <a href="{{ route('site.news') }}" class="text-white-50">Notícias</a><br>
                <a href="{{ route('site.image') }}" class="text-white-50">Galeria de Imagens</a><br>
                <a href="{{ route('site.video') }}" class="text-white-50">Galeria de Vídeos</a><br>


            </div>

            <div class="col-lg-2 col-md-4 footer-contact text-center text-md-start">
                <h4>Links Úteis</h4>

                <a href="https://governo.gov.ao/" target="_blank" class="text-white-50">Portal do Governo de
                    Angola</a><br>
                <a href="https://minttics.gov.ao/ao/" target="_blank" class="text-white-50">Ministério das
                    Telecomunicações, Tecnologia de Informação e Comunicação Social</a><br>
                <a href="https://digital.ao/ao/" target="_blank" class="text-white-50">Digital.AO</a><br>
                <a href="https://igae.gov.ao/" target="_blank" class="text-white-50">DNS.AO</a><br>

                <div class="social-links d-flex mt-4">
                    <a href="https://www.facebook.com/infosi.nacional" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/infosinacional/" class="linkedin"><i
                            class="bi bi-linkedin"></i></a>
                </div>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            <strong>INFOSI</strong> - 2023 &copy; Todos Direitos Reservados
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
<script src="/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/site/vendor/aos/aos.js"></script>
<script src="/site/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/site/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/site/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/site/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/site/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/site/js/main.js"></script>


{{--  <!-- Other JS File -->
<script src="/site/js/particles.js"></script>
<script src="/site/js/app.js"></script>  --}}

@yield('JS')
