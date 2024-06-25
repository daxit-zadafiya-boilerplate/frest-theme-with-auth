<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('theme-assets/assets/') }}" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>404 Error | {{ env('APP_NAME') }}</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="{{ asset('theme-assets/assets/img/favicon/favicon.ico') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/fonts/flag-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <link rel="stylesheet" href="{{ asset('theme-assets/assets/vendor/css/pages/page-misc.css') }}" />

    <script src="{{ asset('theme-assets/assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h1 class="mb-2 mx-2">Page Not Found :(</h1>
            <p class="mb-4 mx-2">We couldn't find the page you are looking for</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Back to Dashboard</a>
            <div class="mt-3">
                <img src="{{ asset('theme-assets/assets/img/illustrations/page-misc-error-light.png') }}" alt="page-misc-error-light" width="500" class="img-fluid"  />
            </div>
        </div>
    </div>
    <!-- /Error -->

    <script src="{{ asset('theme-assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('theme-assets/assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('theme-assets/assets/js/main.js') }}"></script>
</body>

</html>
