<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}">
  <title>@yield('title', 'Acceso') | Detistas POS</title>

  <!-- Vendors Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css') }}">
  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">
  @yield('styles')
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{ asset('images/auth-bg/bg-1.jpg') }})">

  <div class="container h-p100">
    @yield('content')
  </div>

  <!-- Vendor JS -->
  <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
  <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
  @yield('scripts')
</body>
</html>
