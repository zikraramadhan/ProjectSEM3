<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/admin/images/favicon.ico">

    <!-- Plugins css -->
    <link href="<?= base_url(); ?>assets/admin/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme Config Js -->
    <script src="<?= base_url(); ?>assets/admin/js/head.js"></script>

    <!-- Bootstrap css -->
    <link href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="<?= base_url(); ?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="<?= base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link href="<?= base_url()?>assets/admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>assets/admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url()?>assets/admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url()?>assets/admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Menu ========== -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <div class="logo-box" style="background:var(--ct-topbar-bg)">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <span class="logo-lg font-22" style="height:50px; color:white;">Admin</span>
                    <span class="logo-sm font-22" style="height:50px; color:white;">Admin</span>
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <span class="logo-lg font-22" style="height:50px; color:white;">Admin</span>
                    <span class="logo-sm font-22" style="height:50px; color:white;">Admin</span>
                </a>
            </div>

            <!-- menu-left -->
            <div class="scrollbar">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="<?= base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block"
                            data-bs-toggle="dropdown">
                            <?= $this->session->userdata('nama'); ?>
                        </a>
                        <div class="dropdown-menu user-pro-dropdown">
                            <!-- item-->
                            <a href="<?= base_url() ?>admin/auth/logout" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted mb-0">Admin Head</p>
                </div>

                <!--- Menu -->
                <ul class="menu">
                    <li class="menu-title">Navigation</li>
                    <li class="menu-item">
                        <a href="<?= base_url() ?>admin/dashboard" class="menu-link">
                            <span class="menu-icon"><i data-feather="activity"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url() ?>admin/pengaduan" class="menu-link">
                            <span class="menu-icon"><i data-feather="bar-chart-2"></i></span>
                            <span class="menu-text"> Pengaduan </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url() ?>admin/psikolog" class="menu-link">
                            <span class="menu-icon"><i data-feather="user"></i></span>
                            <span class="menu-text"> Psikolog </span>
                        </a>
                    </li>
                </ul>
                <!--- End Menu -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left menu End ========== -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-box" style="background:var(--ct-topbar-bg)">
                            <!-- Brand Logo Light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg font-22" style="height:50px; color:white;">Admin</span>
                                <span class="logo-sm font-22" style="height:50px; color:white;">Admin</span>
                            </a>

                            <!-- Brand Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg font-22" style="height:50px; color:white;">Admin</span>
                                <span class="logo-sm font-22" style="height:50px; color:white;">Admin</span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center">
                        <!-- Fullscreen Button -->
                        <li class="d-none d-md-inline-block">
                            <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                <i class="fe-maximize font-22"></i>
                            </a>
                        </li>
                        <!-- Light/Dark Mode Toggle Button -->
                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                                <i class="ri-moon-line font-22"></i>
                            </div>
                        </li>

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="<?= base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-image"
                                    class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    <?= $this->session->userdata('nama_lengkap'); ?> <i
                                        class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <a href="<?= base_url() ?>admin/auth/logout" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->