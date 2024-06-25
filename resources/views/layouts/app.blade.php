<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('theme-assets/assets') }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $page }} | {{ config('app.name') }}</title>

    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('theme-assets/assets/img/favicon/favicon.ico') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/fonts/flag-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

    <script src="{{ asset('theme-assets/assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/js/config.js') }}"></script>

    @stack('custom-styles')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar bg-primary-admin">
        <div class="layout-container">
            <x-sidebar />

            <div class="layout-page">
                <x-header />

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}
                    </div>
                    <x-footer />
                </div>
            </div>
        </div>

        <input type="hidden" id="siteurl" value="{{ url('/') }}">

        <div class="layout-overlay layout-menu-toggle"></div>

        <div class="drag-target"></div>
    </div>

    <script src="{{ asset('theme-assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/toastr/toastr.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/dropzone/dropzone.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/js/main.js') }}"></script>
    @stack('custom-scripts')
</body>

</html>
