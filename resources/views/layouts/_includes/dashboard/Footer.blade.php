<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script style="text-align: right">
                document.write(new Date().getFullYear());
            </script>
            <a href="https://www.minttics.gov.ao" target="_blank" class="footer-link fw-bolder">INFOSI</a>
        </div>
        <div>
            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                class="footer-link me-4">Documentation</a>

            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                class="footer-link me-4">Support</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@endif


<script src="{{ asset('dashboard/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/js/menu.js') }}"></script>

<script src="/js/sweetalert2.all.min.js"></script>
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Vendors JS -->
<script src="{{ asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('dashboard/assets/js/main.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('dashboard/assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="{{ asset('dashboard/js/buttons.js') }}"></script>

<script type="text/javascript" src="{{ asset('dashboard/assets/toastr/js/toastify.js') }}"></script>

@if (session('create'))
    <script>
        Toastify({
            text: 'Salvo com sucesso!',
            duration: 5000,
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)"
            }
        }).showToast();
    </script>
@elseif (session('edit'))
    <script>
        Toastify({
            text: 'Editado com sucesso!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@elseif (session('destroy'))
    <script>
        Toastify({
            info: 'Excluido com sucesso!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@elseif (session('exist_email'))
    <script>
        Toastify({
            text: 'E-mail já existente!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
    @elseif (session('exists'))
    <script>
        Toastify({
            text: 'Informação já existente!',
            duration: 5000,
            style: {
                background: "linear-gradient(45deg, red, blue)"
            }
        }).showToast();
    </script>
@endif
