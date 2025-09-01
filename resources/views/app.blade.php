<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Azhary-Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('website_assets/img/logo-no.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet">

</head>

<body>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="{{url('/admin/dashboard')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
            
              <img src="{{asset('website_assets/img/logo-no.png')}}" style="width: 50px; height: 50px;" alt="Logo" class="img-fluid">
              </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>
            

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
            @php
                $dashboardActive = request()->routeIs('admin.dashboard');
            @endphp
                <li class="menu-item {{ $dashboardActive ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>
                <!-- Teachers Management -->
            @php
                $teachersActive = request()->is('admin/teachers') || request()->is('admin/teachers/*');
                $teachersCreateActive = request()->is('admin/teachers/create');
                $teachersListActive = request()->is('admin/teachers') || (request()->is('admin/teachers/*') && !request()->is('admin/teachers/create'));
            @endphp
            <li class="menu-item {{ $teachersActive ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Teachers">Teachers</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ $teachersListActive ? 'active' : '' }}">
                        <a href="{{ route('admin.teachers.index') }}" class="menu-link">
                            <div data-i18n="All Teachers">All Teachers</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $teachersCreateActive ? 'active' : '' }}">
                        <a href="{{ route('admin.teachers.create') }}" class="menu-link">
                            <div data-i18n="Add Teacher">Add Teacher</div>
                        </a>
                    </li>
                </ul>
            </li> 
            @php
                $enrollmentsActive = request()->is('admin/enrollments') || request()->is('admin/enrollments/*');
            @endphp
            <li class="menu-item {{ $enrollmentsActive ? 'active' : '' }}">
                <a href="{{ route('admin.enrollments.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-list-check"></i>
                    <div data-i18n="Enrollments">Enrollments</div>
                </a>
            </li>

            @php
                $articlesActive = request()->is('admin/articles') || request()->is('admin/articles/*');
                $articlesCreateActive = request()->is('admin/articles/create');
                $articlesListActive = request()->is('admin/articles') || (request()->is('admin/articles/*') && !request()->is('admin/articles/create'));
            @endphp
            <li class="menu-item {{ $articlesActive ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-news"></i>
                    <div data-i18n="Articles">Articles</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ $articlesListActive ? 'active' : '' }}">
                        <a href="{{ route('admin.articles.index') }}" class="menu-link">
                            <div data-i18n="All Articles">All Articles</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $articlesCreateActive ? 'active' : '' }}">
                        <a href="{{ route('admin.articles.create') }}" class="menu-link">
                            <div data-i18n="Add Article">Add Article</div>
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

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                type="text"
                                class="form-control border-0 shadow-none"
                                placeholder="Search..."
                                aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->
            @yield('content')
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>

<script src="{{ asset('assets/js/select2.min.js') }}"></script>

<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
<script src='{{url('https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js')}}'></script>
<script src="{{url('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

@stack('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let successMessage = "{{ session('success') }}";
        console.log('Success message:', successMessage); // Add this line

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Room Create Successfully',
                text: successMessage,
            })
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        @if ($errors->any())
        let errorMessage = '';
        @foreach ($errors->all() as $error)
            errorMessage += '{{ $error }}<br>';
        @endforeach
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: errorMessage,
        })
        @endif
    });
</script>
</body>
</html>
