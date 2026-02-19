<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Detistas POS">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <title>@yield('title', 'Detistas POS') | Detistas POS</title>

    <!-- Vendors Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">

    @yield('styles')
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
    <div id="loader"></div>

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
                <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
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
                                <button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
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
                <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" data-bs-toggle="dropdown" title="User">
                    <div class="d-flex pt-1">
                        <div class="text-end me-10">
                            <p class="pt-5 fs-14 mb-0 fw-700 text-primary">{{ Auth::user()->name ?? 'Admin' }}</p>
                            <small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
                        </div>
                        <img src="{{ asset('images/avatar/avatar-1.png') }}" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                    </div>
                </a>
                <ul class="dropdown-menu animated flipInX">
                  <li class="user-body">
                     <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Perfil</a>
                     <a class="dropdown-item" href="{{ route('login') }}"><i class="ti-lock text-muted me-2"></i> Cerrar sesión</a>
                  </li>
                </ul>
            </li>
            <li class="btn-group nav-item d-lg-inline-flex d-none">
                <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Pantalla completa">
                    <i class="icon-Position"></i>
                </a>
            </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notificaciones">
              <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
            </a>
            <ul class="dropdown-menu animated bounceIn">
              <li class="header">
                <div class="p-20">
                    <div class="flexbox">
                        <div><h4 class="mb-0 mt-0">Notificaciones</h4></div>
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
              <a href="#" data-toggle="control-sidebar" title="Ajustes" class="waves-effect full-screen waves-light btn-danger-light">
                <i class="icon-Settings1"><span class="path1"></span><span class="path2"></span></i>
              </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
          <div class="multinav-scroll" style="height: 100%;">
              <!-- sidebar menu-->
              <ul class="sidebar-menu" data-widget="tree">
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                  <a href="{{ route('dashboard') }}">
                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                    <span>Dashboard</span>
                  </a>
                </li>
                <li class="{{ request()->routeIs('citas.*') ? 'active' : '' }}">
                  <a href="{{ route('citas.index') }}">
                    <i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>
                    <span>Citas</span>
                  </a>
                </li>
                <li class="treeview {{ request()->routeIs('pacientes.*') ? 'active' : '' }}">
                  <a href="#">
                    <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
                    <span>Pacientes</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('pacientes.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lista de Pacientes</a></li>
                  </ul>
                </li>
                <li class="{{ request()->routeIs('reportes.*') ? 'active' : '' }}">
                  <a href="{{ route('reportes.index') }}">
                    <i class="icon-Settings-1"><span class="path1"></span><span class="path2"></span></i>
                    <span>Reportes</span>
                  </a>
                </li>
                <li class="treeview {{ request()->routeIs('doctores.*') ? 'active' : '' }}">
                  <a href="#">
                    <i class="icon-Diagnostics"><span class="path1"></span><span class="path2"></span></i>
                    <span>Doctores</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('doctores.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lista de Doctores</a></li>
                  </ul>
                </li>
                <li class="header">Configuración</li>
                <li class="treeview">
                  <a href="#">
                    <i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
                    <span>Autenticación</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{ route('login') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Iniciar Sesión</a></li>
                    <li><a href="{{ route('registro') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Registrarse</a></li>
                  </ul>
                </li>
              </ul>

              <div class="sidebar-widgets">
                <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                  <div class="text-center">
                    <img src="{{ asset('images/svg-icon/color-svg/custom-17.svg') }}" class="sideimg p-5" alt="">
                    <h4 class="title-bx text-primary">Agendar Cita</h4>
                    <a href="{{ route('citas.index') }}" class="py-10 fs-14 mb-0 text-primary">
                        Atención médica disponible <i class="mdi mdi-arrow-right"></i>
                    </a>
                  </div>
                </div>
                <div class="copyright text-center m-25">
                    <p><strong class="d-block">Detistas POS</strong> © {{ date('Y') }} Todos los derechos reservados</p>
                </div>
              </div>
          </div>
        </div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
      </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>

</div>
<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

<!-- Doclinic App -->
<script src="{{ asset('assets/js/template.js') }}"></script>

@yield('scripts')

</body>
</html>
