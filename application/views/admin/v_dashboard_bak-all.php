<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?= $judul ?> | <?= $this->config->item('app_name') ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/image/faficon.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/adminlte4/dist/css/adminlte.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/css/adminlte.min.css" integrity="sha256-c66Dhf3TzKZoXxk8aNaf2lu580xGnKke4mjUtbpMqYg=" crossorigin="anonymous"/> -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/adminlte4/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <style>
        body {
        font-family: 'Poppins', sans-serif;
        }

        /* ATUR SEMUA WARNA DI SIDEBAR */
        .app-sidebar {
            /* --lte-sidebar-hover-bg: #20c997 !important; */
            /* --lte-sidebar-color: #343a40; */
            /* --lte-sidebar-hover-color: #fff !important; */
            /* --lte-sidebar-active-color: #000; */
            --lte-sidebar-menu-active-bg:  #007bff !important;
            --lte-sidebar-menu-active-color: #fff !important;
            /* --lte-sidebar-submenu-bg: transparent;
            --lte-sidebar-submenu-color: #777;
            --lte-sidebar-submenu-hover-color: #000;
            --lte-sidebar-submenu-hover-bg: rgba(0, 0, 0, 0.1);
            --lte-sidebar-submenu-active-color: #212529;
            --lte-sidebar-submenu-active-bg: rgba(0, 0, 0, 0.1);
            --lte-sidebar-header-color: #31373d; */
            }

        /* .my-bg-sidebar .sidebar-menu > .nav-item > .nav-link.active {
            background-color: #007bff !important; 
            color: #fff !important;
        }
        .my-bg-sidebar .sidebar-menu.nav-legacy > .nav-item > .nav-link.active {
            border-color: #007bff !important;
        } */

        /* .app-main {
        background: linear-gradient(to top, rgba(207, 176, 212, 0.96), rgba(235, 235, 235, 1));
        } */


        .app-footer {
        background: linear-gradient(to right, rgba(56, 154, 255, 0.71), rgba(144, 0, 149, 0.71)), url("assets/image/bg_technologi.webp") top center;
        color: white;
        }

        /* .app-header {
        background: linear-gradient(to right, rgba(56, 154, 255, 0.71), rgba(144, 0, 149, 0.71));
        } */
    </style>
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary sidebar-mini hold-transition" onload="startTime()">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body shadow"> <!--begin::Container-->
            <div class="container-fluid">

                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="fas fa-bars"></i> </a> </li>
                    <!-- <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li> -->
                    <li class="nav-item">
                        <span class="nav-link text-dark"><b>Tahun: <?= isset($tp_active) ? $tp_active->tahun : "2023" ?> | Triwulan: <?= isset($smt_active) ? $smt_active->nama_smt : "IV" ?></b></span>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    </li>
                    <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item dropdown">
                        <button
                        class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                        id="bd-theme"
                        type="button"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        data-bs-display="static"
                        >
                        <span class="theme-icon-active">
                            <i class="my-1"></i>
                        </span>
                        <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                        </button>
                        <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="bd-theme-text"
                        style="--bs-dropdown-min-width: 8rem;"
                        >
                        <li>
                            <button
                            type="button"
                            class="dropdown-item d-flex align-items-center active"
                            data-bs-theme-value="light"
                            aria-pressed="false"
                            >
                            <i class="bi bi-sun-fill me-2"></i>
                            Light
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                            </button>
                        </li>
                        <li>
                            <button
                            type="button"
                            class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="dark"
                            aria-pressed="false"
                            >
                            <i class="bi bi-moon-fill me-2"></i>
                            Dark
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                            </button>
                        </li>
                        <li>
                            <button
                            type="button"
                            class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="auto"
                            aria-pressed="true"
                            >
                            <i class="bi bi-circle-fill-half-stroke me-2"></i>
                            Auto
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                            </button>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle-->
                    <!-- <li class="nav-item">
                        <div id="live-clock" class="nav-link"></div>
                    </li> -->
                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="<?= base_url('assets') ?>/image/profiles/frengky.png" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Hi, Frengky</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="<?= base_url('assets') ?>/image/profiles/frengky.png" class="rounded-circle shadow" alt="User Image">
                                <p>
                                Frengky Lokobal - Kontributor
                                    <small>Anggota Sejak Oktober 2024</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat text-bg-success">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-end text-bg-danger">Logout</a>
                            </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                    
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header-->
        
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary my-bg-sidebar shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="<?= base_url('assets') ?>/image/icon/aiwerek-ministry.webp" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light"><?= $this->config->item('app_name') ?></span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav nav-pills sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Setting
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p class="text">Aplikasi</p>
                                </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                        <p>User Management</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                        <p>Kelas</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-primary"></i>
                                        <p>Menu</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <br>
                        <li class="nav-header">SEKOLAH SABAT</li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Anak-anak
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p class="text">Begginer</p>
                                </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                        <p>Kindergarten</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                        <p>Primary</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-primary"></i>
                                        <p>Powerpoints</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-balloon-heart-fill"></i>
                                <p>
                                    Remaja
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p class="text">Real Time Faith</p>
                                </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                        <p>Cornerstone Connections</p>
                                    </a> </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box2-heart"></i>
                                <p>
                                    Dewasa Muda
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-success"></i>
                                            <p>inVerse</p>
                                        </a> 
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Dewasa
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-success"></i>
                                            <p>Standar</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                            <p>Penuntun Guru</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                            <p>Easy Reading</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                            <p>EGW Notes</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-primary"></i>
                                            <p>Ringkasan</p>
                                        </a> 
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li class="nav-header">BERITA MISI</li>
                        <li class="nav-item"> <a href="./docs/introduction.html" class="nav-link"> <i class="nav-icon bi bi-star-half text-info"></i>
                                <p>Anak-anak</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="<?= base_url('admin/berita-misi-dewasa') ?>" class="nav-link <?= $menu == 'bmd' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-star-half text-warning"></i>
                                <p>Pemuda & Dewasa</p>
                            </a>
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->

        <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row"> <!--begin::Col-->
                        <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                            <div class="small-box text-bg-primary">
                                <div class="inner">
                                    <h3>8</h3>
                                    <p>All Class</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
                                </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    Detail <i class="fas fa-arrow-circle-right"></i> </a>
                            </div> <!--end::Small Box Widget 1-->
                        </div> <!--end::Col-->
                        <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                            <div class="small-box text-bg-success">
                                <div class="inner">
                                    <h3>53<sup class="fs-5">%</sup></h3>
                                    <p>Anak-Anak</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                                </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                Detail <i class="fas fa-arrow-circle-right"></i> </a>
                            </div> <!--end::Small Box Widget 2-->
                        </div> <!--end::Col-->
                        <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
                            <div class="small-box text-bg-warning">
                                <div class="inner">
                                    <h3>2</h3>
                                    <p>Remaja</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                                </svg> <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                Detail <i class="fas fa-arrow-circle-right"></i> </a>
                            </div> <!--end::Small Box Widget 3-->
                        </div> <!--end::Col-->
                        <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
                            <div class="small-box text-bg-danger">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Dewasa</p>
                                </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                                </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                Detail <i class="fas fa-arrow-circle-right"></i> </a>
                            </div> <!--end::Small Box Widget 4-->
                        </div> <!--end::Col-->
                    </div> <!--end::Row--> <!--begin::Row-->
                    <div class="row"> <!-- Start col -->
                        <div class="col-lg-7 connectedSortable">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Muatan Materi SS 2024</h3>
                                </div>
                                <div class="card-body">
                                    <div id="revenue-chart"></div>
                                </div>
                            </div> <!-- /.card -->
                        </div> <!-- /.Start col -->

                        <div class="col-lg-5 connectedSortable">
                        <div class="mb-4">
                            
                        </div>
                    </div>
                    </div> <!-- /.row (main row) -->

                    

                    
                    
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main-->
        
        <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline"> <a href="https://aiwerek.tech" class="text-decoration-none"><strong>AiWerek Tech</strong></a></div> <!--end::To the end-->
            &copy; 2024&nbsp; Sekolah Sabat ID | All rights reserved.
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper-->
    
    <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="<?= base_url('assets') ?>/adminlte4/dist/js/adminlte.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0-beta2/dist/js/adminlte.min.js" integrity="sha256-5SPy1/00NR75iVOk7p0Ci0nwAAM8Ab7j31wyie+DKYw=" crossorigin="anonymous"></script> -->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script>
    
    <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script>
        const sales_chart_options = {
            series: [{
                    name: "SS Anak-anak",
                    data: [50, 95, 80, 5],
                },
                {
                    name: "SS Remaja",
                    data: [60, 99, 80, 1],
                },
            ],
            chart: {
                height: 300,
                type: "area",
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ["#0d6efd", "#20c997"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                type: "text",
                categories: [
                    "Triwulan 1",
                    "Triwulan 2",
                    "Triwulan 3",
                    "Triwulan 4",
                ],
            },
            tooltip: {
                x: {
                    format: "MMMM yyyy",
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector("#revenue-chart"),
            sales_chart_options,
        );
        sales_chart.render();
    </script> 

    <!-- DARK MODE -->
    <script>
        // Color Mode Toggler
        (() => {
        "use strict";

        const storedTheme = localStorage.getItem("theme");

        const getPreferredTheme = () => {
            if (storedTheme) {
            return storedTheme;
            }

            return window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        };

        const setTheme = function (theme) {
            if (
            theme === "auto" &&
            window.matchMedia("(prefers-color-scheme: dark)").matches
            ) {
            document.documentElement.setAttribute("data-bs-theme", "dark");
            } else {
            document.documentElement.setAttribute("data-bs-theme", theme);
            }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
            const themeSwitcher = document.querySelector("#bd-theme");

            if (!themeSwitcher) {
            return;
            }

            const themeSwitcherText = document.querySelector("#bd-theme-text");
            const activeThemeIcon = document.querySelector(".theme-icon-active i");
            const btnToActive = document.querySelector(
            `[data-bs-theme-value="${theme}"]`
            );
            const svgOfActiveBtn = btnToActive.querySelector("i").getAttribute("class");

            for (const element of document.querySelectorAll("[data-bs-theme-value]")) {
            element.classList.remove("active");
            element.setAttribute("aria-pressed", "false");
            }

            btnToActive.classList.add("active");
            btnToActive.setAttribute("aria-pressed", "true");
            activeThemeIcon.setAttribute("class", svgOfActiveBtn);
            const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
            themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

            if (focus) {
            themeSwitcher.focus();
            }
        };

        window
            .matchMedia("(prefers-color-scheme: dark)")
            .addEventListener("change", () => {
            if (storedTheme !== "light" || storedTheme !== "dark") {
                setTheme(getPreferredTheme());
            }
            });

        window.addEventListener("DOMContentLoaded", () => {
            showActiveTheme(getPreferredTheme());

            for (const toggle of document.querySelectorAll("[data-bs-theme-value]")) {
            toggle.addEventListener("click", () => {
                const theme = toggle.getAttribute("data-bs-theme-value");
                localStorage.setItem("theme", theme);
                setTheme(theme);
                showActiveTheme(theme, true);
            });
            }
        });
        })();
    </script>
    <!--end::Script-->
</body>
</html>