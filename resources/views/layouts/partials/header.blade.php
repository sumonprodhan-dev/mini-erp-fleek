<nav class="app-header navbar navbar-expand bg-white border-bottom shadow-sm" id="navigation" tabindex="-1">
    <div class="container-fluid">
        <!-- Left Section: Sidebar Toggle & Quick Links -->
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link text-secondary" data-lte-toggle="sidebar" href="#" role="button" aria-label="Toggle sidebar">
                    <i class="bi bi-list fs-4"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block ms-2">
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill fw-medium">
                    <i class="bi bi-building me-1"></i> ERP Procurement
                </span>
            </li>
        </ul>

        <!-- Right Section: User Profile & Actions -->
        <ul class="navbar-nav ms-auto align-items-center">

            <!-- Dynamic User Dropdown -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center py-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- User Avatar Placeholder / Image -->
                    <div class="avatar-circle me-2 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 36px; height: 36px; font-weight: 600;">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="d-none d-md-block text-start me-1">
                        <span class="d-block fw-semibold text-dark fs-6 leading-tight">{{ Auth::user()->name ?? 'Admin' }}</span>
                        <small class="text-muted d-block" style="font-size: 11px;">System Admin</small>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 rounded-3">
                    <!-- User Header Info inside Dropdown -->
                    <li class="px-3 py-2 bg-light rounded-top">
                        <p class="mb-0 fw-bold text-dark">{{ Auth::user()->name ?? 'Admin User' }}</p>
                        <small class="text-muted">{{ Auth::user()->email ?? 'admin@gmail.com' }}</small>
                    </li>
                    <li><hr class="dropdown-divider my-1"></li>

                    <!-- Profile Link -->
                    <li>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item py-2 d-flex align-items-center">
                            <i class="bi bi-person me-2 text-primary"></i> Profile Settings
                        </a>
                    </li>

                    <li><hr class="dropdown-divider my-1"></li>

                    <!-- Logout Button (POST Form) -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item py-2 text-danger d-flex align-items-center w-100">
                                <i class="bi bi-box-arrow-right me-2"></i> Sign Out
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>