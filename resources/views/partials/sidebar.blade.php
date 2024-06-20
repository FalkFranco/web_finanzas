<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/img/logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/img/logo.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="lo">
                <img src="{{ URL::asset('build/img/logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/img/logo.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Cuentas</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tachometer-alt"></i> <span>Cuentas</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="entidades" class="nav-link">Entidades</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm" class="nav-link">Administrar Cuentas</a>
                            </li>
                            <li class="nav-item">
                                <a href="index" class="nav-link">Transferencias entre Cuentas</a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span>Transacciones</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <lai class="nav-item">
                                <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCalendar"
                                    data-key="t-calender">Registros</a>
                                <div class="collapse menu-dropdown" id="sidebarCalendar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-calendar" class="nav-link"> Registrar Ingreso </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-calendar-month-grid" class="nav-link"> Registrar Gastos </a>
                                        </li>
                                    </ul>
                                </div>
                            </lai>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Historial de Transacciones</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Categorías de Transacciones</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><span>Presupuestos</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tachometer-alt"></i> <span>Presupuestos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics" class="nav-link">Administrar Presupuestos</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm" class="nav-link">Seguimiento de Presupuestos</a>
                            </li>
                            <li class="nav-item">
                                <a href="index" class="nav-link">Alertas de Presupuestos Excedidos</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tachometer-alt"></i> <span>Tarjetas</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            {{-- <li class="nav-item">
                                <a href="dashboard-analytics" class="nav-link">Lista de Tarjetas</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="tarjetas" class="nav-link">Administrar Tarjetas</a>
                            </li>
                            <li class="nav-item">
                                <a href="resumenes" class="nav-link">Resumenes</a>
                            </li>
                            <li class="nav-item">
                                <a href="index" class="nav-link">Historial de Transacciones de Tarjetas</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tachometer-alt"></i> <span>Informes</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics" class="nav-link">Informe de Ingresos y Gastos</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm" class="nav-link">Informe de Balance Mensual / Anual</a>
                            </li>
                            <li class="nav-item">
                                <a href="index" class="nav-link">Informe de Categorías</a>
                            </li>
                        </ul>
                    </div>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
