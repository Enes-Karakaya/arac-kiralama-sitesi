<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>BG RENTAL</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    @section('css')

    @show


    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class=" demo" style=" margin: auto;  ">
                    <span class="app-brand-logo demo" style="margin: 20px">
                        <img width="130px" height="100px" src="../assets/logo.png" alt="Logo">
                    </span>

                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class=" small text-uppercase"><span class="menu-header-text"></span></li>

                    <li class="menu-item nav-link-item {{ Request::routeIs('move.homeAdminPage') ? 'active' : '' }}">
                        <a href="{{ route('move.homeAdminPage') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Anasayfa</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Elements</span>
                    </li>

                    <li
                        class="menu-item nav-link-item {{ Request::routeIs('move.AddPointAdminPage') ? 'active' : '' }}">
                        <a href="{{ route('move.AddPointAdminPage') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-location-plus"></i>
                            <div data-i18n="Basic">Yerler Adresi</div>
                        </a>
                    </li>

                    <li
                        class="menu-item nav-link-item {{ Request::routeIs('move.AddDriverAdminPage') ? 'active' : '' }}">
                        <a href="{{ route('move.AddDriverAdminPage') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-male"></i>
                            <div data-i18n="Basic">Sürücü Ekle</div>
                        </a>
                    </li>


                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Araba</span></li>


                    {{-- <li class="menu-item "> --}}
                    <li
                        class="menu-item nav-link-item {{ Request::routeIs(['move.AddCarAdminPage', 'move.maintencePage', 'move.vioationPage']) ? 'open active' : '' }}">

                        <a href="javascript:void(0);" class="menu-link menu-toggle action">
                            <i class="menu-icon tf-icons bx bx-car"></i>
                            <div data-i18n="Layouts">Araba Ayarları</div>
                        </a>

                        <ul class="menu-sub  ">
                            <li
                                class="menu-item nav-link-item {{ Request::routeIs('move.AddCarAdminPage') ? 'active' : '' }}">
                                <a href="{{ route('move.AddCarAdminPage') }}" class="menu-link ">
                                    <div data-i18n="Without menu">Araba Ekle</div>
                                </a>
                            </li>

                            <li
                                class="menu-item nav-link-item {{ Request::routeIs('move.maintencePage') ? 'active' : '' }}">

                                <a href="{{ route('move.maintencePage') }}" class="menu-link">
                                    <div data-i18n="Without menu">Araba Bakımları</div>
                                </a>
                            </li>

                            <li
                                class="menu-item nav-link-item {{ Request::routeIs('move.vioationPage') ? 'active' : '' }}">
                                <a href="{{ route('move.vioationPage') }}" class="menu-link">
                                    <div data-i18n="Without menu">Araba Vergileri</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>

                                    <li>
                                        <form method="POST" class="dropdown-item" action="{{ route('logout') }}">
                                            @csrf
                                            <label for="logoutBtn">
                                                <i class="bx bx-power-off me-2"></i>
                                            </label>
                                            <button id="logoutBtn" class="align-middle"
                                                style="background-color: transparent; color:#68798C ; border:none ;  ">Çıkış
                                                Yap</button>
                                        </form>

                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @section('ErrorMsg')

                        @show
                        @section('content')

                        @show


                    </div>
                    <!-- / Content -->



                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
    </div>
    <!-- / Layout wrapper -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Select all menu items
        const menuItems = document.querySelectorAll('.menu-item.nav-link-item');

        // Add a click event listener to each menu item
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove the 'active' class from all menu items
                menuItems.forEach(link => link.classList.remove('active'));

                // Add the 'active' class to the clicked item
                this.classList.add('active');
            });
        });
    </script>


    @section('js')

    @show

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main2.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
