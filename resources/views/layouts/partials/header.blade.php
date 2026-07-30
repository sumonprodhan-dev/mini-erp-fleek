<nav class="navbar bg-white border-bottom shadow-sm px-3 py-2 d-flex justify-content-between align-items-center">
    
    <div class="d-flex align-items-center gap-3">
        <button
            class="btn btn-light border-0 rounded-circle d-flex justify-content-center align-items-center shadow-sm text-secondary"
            id="menu-toggle" style="width: 40px; height: 40px;">
            <i class="bi bi-list fs-4"></i>
        </button>
        <span
            class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-medium d-none d-sm-inline-block">
            <i class="bi bi-building me-1"></i> ERP Procurement
        </span>
    </div>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2 shadow-sm"
                style="width: 36px; height: 36px; font-weight: 600;">
                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="d-none d-md-block text-start me-1 text-dark">
                <span class="d-block fw-semibold" style="line-height: 1.2;">{{ Auth::user()->name ?? 'Admin' }}</span>
                <small class="text-muted" style="font-size: 11px;">System Admin</small>
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2 rounded-3" aria-labelledby="userDropdown">
            <li class="px-3 py-2 bg-light rounded-top">
                <p class="mb-0 fw-bold text-dark">{{ Auth::user()->name ?? 'Admin User' }}</p>
                <small class="text-muted">{{ Auth::user()->email ?? 'admin@gmail.com' }}</small>
            </li>
            <li>
                <hr class="dropdown-divider my-1">
            </li>
            <li>
                <a class="dropdown-item py-2 d-flex align-items-center" href="#">
                    <i class="bi bi-person me-2 text-primary"></i> Profile Settings
                </a>
            </li>
            <li>
                <hr class="dropdown-divider my-1">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item py-2 text-danger d-flex align-items-center w-100">
                        <i class="bi bi-box-arrow-right me-2"></i> Sign Out
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
