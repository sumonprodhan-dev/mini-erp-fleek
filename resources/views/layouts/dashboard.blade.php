<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/v/dt/dt-3.0.0/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
    @yield('title' ?? 'Fleek BD')
    @stack('style')
    <style>
        .app-sidebar .sidebar-wrapper {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            overflow-x: hidden !important;
        }

        .app-sidebar .nav-sidebar .nav-item {
            padding-right: 0 !important;
        }

        .app-sidebar .nav-sidebar .nav-link {
            border-radius: 0.5rem !important;
            margin-right: 0 !important;
            width: 100% !important;
        }

        .app-sidebar .nav-sidebar .nav-link.active {
            background-color: #0d6efd !important;
            color: #ffffff !important;
            box-shadow: 0 2px 6px rgba(13, 110, 253, 0.25) !important;
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary app-loaded" data-new-gr-c-s-check-loaded="14.1315.0"
    data-gr-ext-installed="">
    <div class="skip-links"><a href="#main" class="skip-link">Skip to main content</a><a href="#navigation"
            class="skip-link">Skip to navigation</a></div>
    <div class="app-wrapper">
        @include('layouts.partials.header')
        @include('layouts.partials.sidebar')

        @yield('content')

        <div class="sidebar-overlay"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-3.0.0/datatables.min.js"></script>
    <script src="{{ asset('assets/js/adminlte.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let table = new DataTable('#myTable', {
                pageLength: 10,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records..."
                }
            });
        });
    </script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

            const isMobile = window.innerWidth <= 992;

            if (
                sidebarWrapper &&
                OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
                !isMobile
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
    </script>
    @stack('script')
</body>