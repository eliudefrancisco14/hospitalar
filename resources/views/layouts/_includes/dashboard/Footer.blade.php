<!-- Footer -->
<footer class="content-footer footer bg-footer-theme  text-center">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="container mt-4">
            <div class="copyright">
                <strong>INFOSI</strong> - 2023 &copy; Todos Direitos Reservados | <a href="{{ route('site.terms') }}" target="_blank" class="text-dark-50 ank">Politícas de Privacidade & Termos de Uso</a>
            </div>
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

<!-- Vendors JS -->
<script src="{{ asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('dashboard/assets/js/main.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('dashboard/assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="{{ asset('dashboard/js/buttons.js') }}"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
</script>

<script src='/dashboard/js/jquery.dataTables.min.js'></script>
<script src='/dashboard/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [8, 16, 32, -1],
            [8, 16, 32, "All"]
        ],
        "order": [
            [0, 'desc']
        ]
    });
</script>

{{-- <script type="text/javascript" src="{{ asset('dashboard/assets/toastr/js/toastify.js') }}"></script> --}}

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
