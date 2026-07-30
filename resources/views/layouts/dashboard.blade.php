<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fleek ERP')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            overflow-x: hidden;
            background-color: #f4f6f9;
        }

        #wrapper {
            display: flex;
            height: 100vh;
        }

        #sidebar-wrapper {
            min-width: 250px;
            max-width: 250px;
            background-color: #ffffff;
            border-right: 1px solid #e3e6f0;
            transition: margin 0.3s ease-out;
            display: flex;
            flex-direction: column;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 1.2rem 1.5rem;
            font-size: 1.25rem;
            font-weight: 700;
            border-bottom: 1px solid #e3e6f0;
        }

        #sidebar-wrapper .list-group {
            padding: 10px;
            overflow-y: auto;
            flex-grow: 1;
        }

        #sidebar-wrapper .list-group-item {
            border: none;
            padding: 0.8rem 1rem;
            margin-bottom: 4px;
            border-radius: 6px;
            color: #495057;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        #sidebar-wrapper .list-group-item:hover {
            background-color: #f8f9fa;
            color: #0d6efd;
        }

        #sidebar-wrapper .list-group-item.active {
            background-color: #0d6efd;
            color: #ffffff;
        }

        #page-content-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .top-navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e3e6f0;
            padding: 0.75rem 1.5rem;
        }

        .main-content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 1.5rem;
        }

        @media (max-width: 768px) {
            #sidebar-wrapper {
                margin-left: -250px;
                position: absolute;
                height: 100vh;
                z-index: 1000;
                box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: 0;
            }

            #wrapper.toggled::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.4);
                z-index: 999;
            }
        }
    </style>
    @stack('style')
</head>

<body>

    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="page-content-wrapper">

            @include('layouts.partials.header')

            <main class="main-content">
                @yield('content')
            </main>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
            showClass: {
                popup: 'animate__animated animate__fadeInRight animate__faster'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutRight animate__faster'
            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        // Laravel Session Listeners
        @if (session('success'))
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            });
        @endif

        @if (session('error'))
            Toast.fire({
                icon: 'error',
                title: "{{ session('error') }}"
            });
        @endif

        @if (session('warning'))
            Toast.fire({
                icon: 'warning',
                title: "{{ session('warning') }}"
            });
        @endif

        @if (session('info'))
            Toast.fire({
                icon: 'info',
                title: "{{ session('info') }}"
            });
        @endif
    </script>
    <script>
        document.addEventListener('click', function(event) {
            const deleteBtn = event.target.closest('.delete-btn');
            if (!deleteBtn) return;

            event.preventDefault();
            const form = deleteBtn.closest('.delete-form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                width: 400,
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>

    <script>
        document.addEventListener('click', function(event) {
            const deleteBtn = event.target.closest('.force-delete-btn');
            if (!deleteBtn) return;

            event.preventDefault();
            const form = deleteBtn.closest('.force-delete-form');

            Swal.fire({
                title: 'Permanently Delete?',
                text: "You won't be able to revert this! This data will be deleted forever.",
                icon: 'warning',
                width: 400,
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete forever!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("wrapper").classList.toggle("toggled");

            if (window.innerWidth > 768) {
                let sidebar = document.getElementById("sidebar-wrapper");
                if (sidebar.style.marginLeft === '-250px') {
                    sidebar.style.marginLeft = '0';
                } else {
                    sidebar.style.marginLeft = '-250px';
                }
            }
        });

        document.addEventListener('click', function(event) {
            let wrapper = document.getElementById("wrapper");
            let sidebar = document.getElementById("sidebar-wrapper");
            let toggleBtn = document.getElementById("menu-toggle");

            if (window.innerWidth <= 768 && wrapper.classList.contains("toggled")) {
                if (!sidebar.contains(event.target) && !toggleBtn.contains(event.target)) {
                    wrapper.classList.remove("toggled");
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let table = new DataTable('#myTable', {
                pageLength: 10,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records..."
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
