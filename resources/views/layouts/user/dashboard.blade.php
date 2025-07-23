<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Dashboard')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logopjt.png') }}" />

     <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/fonts/iconify-icons.css') }}" />

    <link href="https://unpkg.com/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">


    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('vendor/libs/node-waves/node-waves.css') }}"/>

    <link rel="stylesheet" href="{{ asset('vendor/libs/pickr/pickr-themes.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/css/pages/front-page.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/tabler-icons/css/tabler-icons.min.css') }}">

    <!-- endbuild -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/pages/front-page-landing.css') }}" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/responsive.bootstrap5.min.css') }}">


    <!-- Helpers -->
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>

    <!-- Template Customizer -->
    <script src="{{ asset('vendor/js/template-customizer.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('js/front-config.js') }}"></script>

</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- Sidebar --}}
            @include('layouts.user.sidebar')

            {{-- Layout Page --}}
            <div class="layout-page">
                
                <div class="navbar-nav-right d-flex align-items-center justify-content-end px-6 pt-3" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                            <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                                <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                            </a>
                            </div>
                        </div>

                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                

                        <!-- Notification -->
                        {{-- <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                            <a
                                class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"
                                aria-expanded="false">
                                <span class="position-relative">
                                <i class="icon-base ti tabler-bell icon-22px text-heading"></i>
                                <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                                </span>
                            </a>
                            
                        </li> --}}
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a
                            class="nav-link dropdown-toggle hide-arrow p-0"
                            href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                            <img src="{{ asset('img/avatars/1.png') }}" alt class="rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                            <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                                <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar avatar-online">
                                    <img src="{{ asset('img/avatars/6.png') }}" alt class="rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">Asti</h6>
                                    <small class="text-body-secondary">{{ Auth::user()->role }}</small>
                                </div>
                                </div>
                            </a>
                            </li>
                            <li>
                            <div class="dropdown-divider my-1 mx-n2"></div>
                            </li>
                            <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="icon-base ti tabler-settings me-3 icon-md"></i
                                ><span class="align-middle">Pengaturan</span>
                            </a>
                            </li>
                            
                            <li>
                                <div class="dropdown-divider my-1 mx-n2"></div>
                            </li>
                            
                            <li>
                            <div class="d-grid px-2 pt-2 pb-1">
                                <a class="btn btn-sm btn-danger d-flex" href="{{ url('auth/login') }}" target="_blank">
                                <small class="align-middle">Logout</small>
                                <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
                                </a>
                            </div>
                            </li>
                        </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>

                {{-- Content --}}
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>

                    {{-- Footer --}}
                    <footer class="content-footer footer bg-light">
                        <div class="container-xxl d-flex justify-content-between py-2">
                            <div>
                                &copy; {{ date('Y') }} SPAM. All rights reserved.
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->
    <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('vendor/libs/@algolia/autocomplete-js.js') }}"></script>

    <script src="{{ asset('vendor/libs/pickr/pickr.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/front-main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/front-page-landing.js') }}"></script>

    <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
