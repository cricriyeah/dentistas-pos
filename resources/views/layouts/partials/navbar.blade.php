<header class="main-header">

    <div class="logo-box"></div>

    <nav class="navbar navbar-static-top">

        <div class="app-menu">
            <ul class="header-megamenu nav">

                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                        data-toggle="push-menu" role="button">
                        <i class="icon-Menu"></i>
                    </a>
                </li>

                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="search-bx mx-5">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Buscar">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="icon-Search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <li class="dropdown user-menu-minimal">
                    <a href="#" class="dropdown-toggle minimal-user" data-bs-toggle="dropdown">
                        <i class="icon-User"></i>
                        <span class="user-name">
                            {{ Auth::user()->name ?? 'Admin' }}
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="ti-user me-2"></i> Perfil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="ti-lock me-2"></i> Cerrar sesión
                            </a>
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

                <li class="dropdown notifications-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light"
                        data-bs-toggle="dropdown">
                        <i class="icon-Notification"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">
                            <div class="p-20">
                                <h4 class="mb-0">Notificaciones</h4>
                            </div>
                        </li>
                        <li>
                            <ul class="menu sm-scrol">
                                <li>
                                    <a href="#">
                                        No hay notificaciones nuevas.
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="btn-group nav-item">
                    <a href="#" data-toggle="control-sidebar"
                        class="waves-effect waves-light btn-danger-light">
                        <i class="icon-Settings1"></i>
                    </a>
                </li>

            </ul>
        </div>

    </nav>

</header>

<style>
.minimal-user
{
    display:flex;
    align-items:center;
    gap:8px;
    font-weight:600;
    color:#2c3e50;
    padding:6px 12px;
}

.minimal-user i
{
    font-size:18px;
    color:#18b9b5;
}

.user-name
{
    font-size:14px;
}
</style>