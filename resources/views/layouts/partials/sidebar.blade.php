<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="mdi mdi-view-dashboard"></i>                            
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('servicios.*') ? 'active' : '' }}">
                        <a href="{{ route('servicios.index') }}">
                            <i class="mdi mdi-medical-bag"></i>
                            <span>Servicios</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('citas.*') ? 'active' : '' }}">
                        <a href="{{ route('citas.index') }}">
                            <i class="mdi mdi-calendar-multiple"></i>
                            <span>Citas</span>
                        </a>
                    </li>
                    <li class="treeview {{ request()->routeIs('pacientes.*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="mdi mdi-human-greeting"></i>
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
                    <!-- <li class="{{ request()->routeIs('reportes.*') ? 'active' : '' }}">
                        <a href="{{ route('reportes.index') }}">
                            <i class="mdi mdi-file-document"></i>
                            <span>Reportes</span>
                        </a>
                    </li> -->
                    <li class="treeview {{ request()->routeIs('doctores.*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="mdi mdi-pill"></i>
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
                    <!-- <li class="treeview {{ request()->routeIs('roles.*') || request()->routeIs('permisos.*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="mdi mdi-ticket-account"></i>
                            <span>Roles</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('roles.index') }}">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                    Roles
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('permisos.index') }}">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>
                                    Permisos
                                </a>
                            </li>
                        </ul>
                    </li> -->
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
                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="icon-Commit">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Iniciar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</aside>