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
                            <li><a href="{{ route('pacientes.index') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Lista de Pacientes</a>
                            </li>
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
                            <li><a href="{{ route('doctores.index') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Lista de Doctores</a>
                            </li>
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
                            <li><a href="{{ route('login') }}"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Iniciar Sesión</a></li>
                            <li><a href="{{ route('registro') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Registrarse</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                        <div class="text-center">
                            <img src="{{ asset('images/svg-icon/color-svg/custom-17.svg') }}" class="sideimg p-5"
                                alt="">
                            <h4 class="title-bx text-primary">Agendar Cita</h4>
                            <a href="{{ route('citas.index') }}" class="py-10 fs-14 mb-0 text-primary">
                                Atención médica disponible <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright text-center m-25">
                        <p><strong class="d-block">Detistas POS</strong> © {{ date('Y') }} Todos los derechos reservados
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>