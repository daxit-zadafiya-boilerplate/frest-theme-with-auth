<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('theme-assets/assets') }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $page }} | {{ config('app.name') }}</title>

    <meta name="description" content="" />

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

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/css/pages/page-auth.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

    <script src="{{ asset('theme-assets/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/js/config.js') }}"></script>
</head>

<body>
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                <div class="flex-row text-center mx-auto">
                    <img src="{{ asset('theme-assets/assets/img/pages/login-light.png') }}" alt="Auth Cover Bg color"
                        class="img-fluid authentication-cover-img mb-0" />
                </div>
            </div>

            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg px-4 py-3">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="{{ asset('theme-assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/cleavejs/cleave.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/js/main.js') }}"></script>

    @stack('custom-scripts')
</body>

</html>
