@extends('layouts.auth')

@section('content')

<div class="login-page">

    <div class="login-card">

        <div class="login-brand">
            POS Dental
        </div>

        <h1 class="login-title">Login</h1>

        <p class="login-subtitle">
            Accede al sistema de la clínica
        </p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="usuario@clinica.com"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="••••••••"
                    required
                >
            </div>

            <button type="submit" class="btn-login">
                Iniciar sesión
            </button>

        </form>

    </div>

</div>

@endsection


<style>

html, body
{
    width:100%;
    height:100%;
    margin:0;
    padding:0;
}

.login-page
{
    position:fixed;
    inset:0;

    display:flex;
    align-items:center;
    justify-content:center;

    background:linear-gradient(
        135deg,
        #c8fff9 0%,
        #8bf8ed 35%,
        #48e3db 70%,
        #26dedb 100%
    );
}

/* CARD */

.login-card
{
    width:100%;
    max-width:420px;

    background:white;

    padding:40px;

    border-radius:16px;

    box-shadow:
        0 25px 60px rgba(0,0,0,0.15);

    text-align:center;
}

/* TITULOS */

.login-brand
{
    font-weight:700;
    color:#18b9b5;
    margin-bottom:10px;
}

.login-title
{
    margin:0;
    font-size:42px;
    font-weight:700;
    color:#2c3e50;
}

.login-subtitle
{
    margin-top:8px;
    margin-bottom:28px;
    color:#6c757d;
}

/* FORM */

.form-group
{
    text-align:left;
    margin-bottom:18px;
}

.form-group label
{
    font-size:14px;
    font-weight:600;
    color:#495057;
}

.form-control
{
    width:100%;
    height:46px;

    border-radius:8px;

    border:1px solid #e2e8f0;

    padding:0 12px;

    margin-top:6px;

    font-size:14px;

    transition:.2s;
}

.form-control:focus
{
    outline:none;
    border-color:#18b9b5;
    box-shadow:0 0 0 3px rgba(24,185,181,0.15);
}

/* BOTON */

.btn-login
{
    width:100%;
    height:48px;

    margin-top:10px;

    border:none;

    border-radius:10px;

    background:linear-gradient(
        180deg,
        #18b9b5,
        #0fa39f
    );

    color:white;

    font-size:18px;
    font-weight:600;

    cursor:pointer;

    transition:.2s;
}

.btn-login:hover
{
    background:linear-gradient(
        180deg,
        #1fc8c3,
        #119995
    );

    transform:translateY(-1px);
}

</style>