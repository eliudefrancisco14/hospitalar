<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.home') }}" class="">
            <img src="{{ asset('site/img/logo.svg') }}" alt="" class="img-fluid">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Painel Principal</div>
            </a>
        </li>

        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ route('site.home') }}" class="menu-link" target="_blank">
                <i class='menu-icon tf-icons bx bx-globe'></i>
                <div data-i18n="Analytics">Site</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apresentação</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-slideshow"></i>
                <div data-i18n="Authentications">Slideshow</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.slide.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.slide.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Angola Online</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-map-pin"></i>
                <div data-i18n="Authentications">Província</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.province.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.province.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Serviços</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-phone-call"></i>
                <div data-i18n="Authentications">Serviços</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.service.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.service.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-badge"></i>
                <div data-i18n="Authentications">Parceiros</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.partner.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.partner.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">O INFOSI</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Authentications">Definição</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.definition.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.definition.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-horizontal-center"></i>
                <div data-i18n="Authentications">Estrutura Orgânica</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.direction.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.direction.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-horizontal-center"></i>
                <div data-i18n="Authentications">Departamento</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.department.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.department.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-book"></i>
                <div data-i18n="Authentications">Regulamento</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.regulation.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.regulation.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-digitalocean"></i>
                <div data-i18n="Authentications">Inclusão Digital</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.digitalInclusion.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.digitalInclusion.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Mídia</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-image-alt"></i>
                <div data-i18n="Authentications">Galeria de Imagem</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.gallery.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.gallery.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-video"></i>
                <div data-i18n="Authentications">Galeria de Vídeo</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.video.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.video.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Contactos</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-contact"></i>
                <div data-i18n="Authentications">Contactos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.contact.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.contact.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="Authentications">FAQ</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.faq.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.faq.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Notícias</span>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Authentications">Notícia</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.news.create') }}" class="menu-link">
                        <div data-i18n="Basic">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.news.index') }}" class="menu-link">
                        <div data-i18n="Basic">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Utilizadores</span>
        </li>

        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Usuários</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.user.create') }}" class="menu-link">
                        <div data-i18n="Account">Cadastrar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.user.index') }}" class="menu-link">
                        <div data-i18n="Notifications">Listar</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>