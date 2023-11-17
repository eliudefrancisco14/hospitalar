  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Logo</h3>
            <p>
              Localização <br><br>
              <strong>Phone:</strong> +244 999 999 999<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#about') }}">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#services') }}">Serviços</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/paciente') }}">Iniciar Consulta</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Informação</h4>
            <p class="text-md-right">Um sistema hospitalar é uma estrutura organizada que engloba uma variedade de serviços de saúde. 
              Compreendendo desde a recepção e admissão de pacientes até departamentos clínicos especializados, 
              como cirurgia, cardiologia e emergência, o sistema hospitalar visa oferecer cuidados abrangentes.</p>

          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/site/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/site/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/site/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/site/assets/js/main.js"></script>

<script src="/js/sweetalert2.all.min.js"></script>



@if (session('helpCreate'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensagem enviada com sucesso!',
            text: 'Obrigado por nos contactar!',
            showConfirmButton: true
        })
    </script>
@elseif (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Candidatura submetida com sucesso!',
            text: 'Consulte a caixa de entrada do email que informou!',
            showConfirmButton: true
        })
    </script>
@elseif (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: 'Tente novamente ou contacte a área de suporte',
            showConfirmButton: true
        })
    </script>
@endif

@yield('JS')

