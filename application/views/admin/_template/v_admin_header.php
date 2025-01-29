<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?= $judul ?> <?= $subjudul ?> | <?= $this->config->item('app_name') ?></title>
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
    
    <!-- Bootstrap 5 CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/adminlte4/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <!-- Loading Indikator Pace.JS-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/pace-progress/themes/purple/pace-theme-center-circle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/tables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/tables/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- AKTIFKAN TEKS EDITOR WYSIWYG -->
    <!-- CSS Summernote -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
    
    <style>
        body {
        font-family: 'Poppins', sans-serif;
        }

        /* ATUR SEMUA WARNA DI SIDEBAR */
        .app-sidebar {
            --lte-sidebar-hover-bg: #20c997 !important;
            /* --lte-sidebar-color: #343a40; */
            --lte-sidebar-hover-color: #fff !important;
            /* --lte-sidebar-active-color: #000; */
            --lte-sidebar-menu-active-bg:  #007bff !important;
            --lte-sidebar-menu-active-color: #fff !important;
            /* --lte-sidebar-submenu-bg: transparent;
            --lte-sidebar-submenu-color: #777;
            --lte-sidebar-submenu-hover-color: #000;
            /* --lte-sidebar-submenu-hover-bg: rgba(0, 0, 0, 0.1); */
            --lte-sidebar-submenu-active-color: #212529 !important;;
            --lte-sidebar-submenu-active-bg: #fff !important;;
            /* --lte-sidebar-header-color: #31373d; */
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
        .cap {
			display: block;
			color: #df9e00;
			float: left;
			font: 400 4em/1em "Merriweather", serif;
			margin: 0 2px -7px 0;
		}
    </style>
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary sidebar-mini hold-transition" onload="startTime()">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        