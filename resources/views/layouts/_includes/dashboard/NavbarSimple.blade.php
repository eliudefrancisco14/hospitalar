<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">


            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="d-flex">
                            <div class="flex-grow-1 text-center">
                                <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                <small class="text-muted">{{ Auth::user()->level }}</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Configurações</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2 text-danger"></i>
                            <span class="align-middle text-danger">Terminar sessão</span>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
<!-- / Navbar -->
