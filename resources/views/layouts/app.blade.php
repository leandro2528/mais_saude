<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('dashboards-index') }}">SAÚDE</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{ route('dashboards-index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-heart-pulse" style="font-size: 50px; color: #fff;"></i>
                                </div>
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu Navegação</div>
                            <a class="nav-link" href="{{ route('departamentos-index') }}" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-heart-pulse" style="color: #fff;font-size: 16px;"></i></div>
                                Departamento
                            </a>
                            <a class="nav-link" href="{{ route('medicos-index') }}" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-stethoscope"  style="color: #fff;font-size: 16px;"></i></div>
                                Médico
                            </a>
                            <a class="nav-link" href="{{ route('pacientes-index') }}" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user" style="color: #fff;font-size: 16px;"></i></div>
                                Parciente
                            </a>
                            <a class="nav-link" href="{{ route('infermeiras-index') }}" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-notes-medical" style="color: #fff; font-size: 16px;"></i></div>
                                Infermeira(o)
                            </a>
                            <a class="nav-link" href="" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-flask-vial" style="color: #fff;font-size: 16px;"></i></div>
                                Farmaceutico
                            </a>
                            <a class="nav-link" href="" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i style="color: #fff;font-size: 16px;" class="fa-solid fa-pills"></i></div>
                                Laboratório
                            </a>
                            <a class="nav-link" href="" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar" style="color: #fff;font-size: 16px;"></i></div>
                                Contator(a)
                            </a>
                            <a class="nav-link collapsed" style="font-size: 12px;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMonitorar" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i style="color: #fff;font-size: 16px;" class="fa-solid fa-gears"></i></div>
                                Monitorar Hospital
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseMonitorar" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('compromissos-index') }}" style="font-size: 10px;">Ver Compomissos</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver Pagamentos</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver estados da cama</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver Banco de Sangue</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver Medicamentos</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver Operações</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver Relatórios de Nascimentos</a>
                                    <a class="nav-link" href="" style="font-size: 10px;">Ver Relatórios de Óbitos</a>

                                </nav>
                            </div>
                            <a class="nav-link" href="" style="font-size: 12px;">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus" style="color: #fff;font-size: 16px;"></i></div>
                                Perfil
                            </a>
                             
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
               @yield('content')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Desenvolvido por Leandro Carvalho 2024</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
