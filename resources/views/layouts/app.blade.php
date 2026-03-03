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
  <!-- Animaciones personalizadas — editar: public/assets/css/animations.css -->
  <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">

  @yield('styles')
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

  <div class="wrapper">
    <!-- Page Loader Spinner -->
    <div id="loader">
      <div class="loader-spinner"></div>
    </div>

    @include('layouts.partials.navbar')

    @include('layouts.partials.sidebar')

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
  <!-- Ajustes de velocidad/fluidez — editar: public/assets/js/animation-tweaks.js -->
  <script src="{{ asset('assets/js/animation-tweaks.js') }}"></script>

  @yield('scripts')

</body>

</html>