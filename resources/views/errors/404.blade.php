<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <title>404 - Página no encontrada | Detistas POS</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">
</head>
<body class="hold-transition theme-primary">
<div class="container-fluid h-p100">
    <div class="row h-p100 align-items-center justify-content-center text-center">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="box">
                <div class="box-body p-50">
                    <img src="{{ asset('images/svg-icon/color-svg/custom-5.svg') }}" class="mb-30" style="width:120px;" alt="404">
                    <h1 class="text-primary fw-600" style="font-size:72px;">404</h1>
                    <h4>Página no encontrada</h4>
                    <p class="text-muted">Lo sentimos, la página que buscas no existe o fue movida.</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-10">
                        <i class="mdi mdi-home me-5"></i>Ir al Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
</body>
</html>
