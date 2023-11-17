<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/site/assets/img/favicon.png" rel="icon">
  <link href="/site/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/site/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/site/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/site/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/site/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/site/assets/css/style.css" rel="stylesheet">

  <style>
    .contact {
      height: 100vh;
      justify-content: center;
      align-items: center;
    }

    .login {
      justify-content: center;
      align-items: center;
      width: 30rem;
    }
  </style>

</head>

<body>


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">

      <div class="section-title">
        <h2><a href="index.html">Logo</a></h2>
      </div>

      <div class="container login">
        <div class="row mt-0">

          <div class="col-lg-12 mt-5 mt-lg-0 rounded">

            <form action="{{ route('password.email') }}" method="post" role="form" class="php-email-form p-5 rounded shadow">
              @csrf
              <div class="section-title">
                <h2>Recuperar Conta</h2>
                <!-- /Logo -->
              <h4 class="mb-2">Esqueceste a Palavra-Passe? 🔒</h4>
              <p class="mb-4">Digite seu e-mail e enviaremos instruções para redefinir sua senha</p>

              </div>
              
              <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

              <div class="row mb-4">
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <label for="nomeCompleto">E-mail:</label>
                  <input type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Inserir o email"
                    autofocus required>
                </div>
                
              </div>


              <div class="text-center"><button type="submit">Entrar</button></div>
              <div class="text-center">
                  <a href="{{ url('login') }}" class="d-flex align-items-center justify-content-center">
                    <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                    Voltar para o login
                  </a>
                </div>
            </form>


          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->




  </main><!-- End #main -->





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

</body>

</html>