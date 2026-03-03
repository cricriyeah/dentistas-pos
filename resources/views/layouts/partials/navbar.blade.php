<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="logo">
            <!-- logo-->
            <div class="logo-mini w-50">
                <span class="light-logo"><img src="{{ asset('images/logo-letter.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/logo-letter.png') }}" alt="logo"></span>
            </div>
            <div class="logo-lg">
                <span class="light-logo"><img src="{{ asset('images/logo-dark-text.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/logo-light-text.png') }}" alt="logo"></span>
            </div>
        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                        data-toggle="push-menu" role="button">
                        <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                </li>
                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Buscar">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon3"><i
                                                class="icon-Search"><span class="path1"></span><span
                                                    class="path2"></span></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#"
                        class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                        data-bs-toggle="dropdown" title="User">
                        <div class="d-flex pt-1">
                            <div class="text-end me-10">
                                <p class="pt-5 fs-14 mb-0 fw-700 text-primary">{{ Auth::user()->name ?? 'Admin' }}</p>
                                <small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
                            </div>
                            <img src="{{ asset('images/avatar/avatar-1.png') }}"
                                class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                        </div>
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Perfil</a>
                            <a class="dropdown-item" href="{{ route('login') }}"><i class="ti-lock text-muted me-2"></i>
                                Cerrar
                                sesión</a>
                        </li>
                    </ul>
                </li>
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen"
                        class="waves-effect waves-light nav-link full-screen btn-warning-light"
                        title="Pantalla completa">
                        <i class="icon-Position"></i>
                    </a>
                </li>
                <!-- Notifications -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light"
                        data-bs-toggle="dropdown" title="Notificaciones">
                        <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                    <ul class="dropdown-menu animated bounceIn">
                        <li class="header">
                            <div class="p-20">
                                <div class="flexbox">
                                    <div>
                                        <h4 class="mb-0 mt-0">Notificaciones</h4>
                                    </div>
                                    <div><a href="#" class="text-danger">Limpiar todo</a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <ul class="menu sm-scrol">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-info"></i> No hay notificaciones nuevas.
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Ver todas</a></li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li class="btn-group nav-item">
                    <a href="#" data-toggle="control-sidebar" title="Ajustes"
                        class="waves-effect full-screen waves-light btn-danger-light">
                        <i class="icon-Settings1"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>