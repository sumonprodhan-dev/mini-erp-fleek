<style>
    .app-sidebar .sidebar-menu {
        padding: 0 20px 0 0 !important;
    }

    .app-sidebar .sidebar-menu .nav-link {
        border-radius: 0.375rem !important;
        margin-bottom: 2px;
    }
</style>

<aside class="app-sidebar bg-white shadow-sm d-flex flex-column" data-bs-theme="light">
    
    <!-- Brand Logo -->
    <div class="sidebar-brand border-bottom">
        <a href="{{ route('dashboard') }}" class="brand-link px-3 d-flex align-items-center gap-2 text-decoration-none">
            <div class="brand-icon bg-primary text-white rounded d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                <i class="bi bi-box-seam-fill fs-6"></i>
            </div>
            <span class="brand-text fw-bold fs-5 text-dark">Fleek <span class="text-primary">ERP</span></span>
        </a>
    </div>

    <!-- Sidebar Menu Area -->
    <div class="sidebar-wrapper flex-grow-1 px-2 mt-2">
        <nav aria-label="Main navigation">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link rounded {{ request()->routeIs('dashboard') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase fs-7 text-muted fw-bold mt-3 mb-1 px-2">Procurement</li>

                <li class="nav-item">
                    <a href="{{ route('requisitions.index') }}" class="nav-link rounded {{ request()->routeIs('requisitions.*') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-file-earmark-text"></i>
                        <p>Requisitions</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('purchase-orders.index') }}" class="nav-link rounded {{ request()->routeIs('purchase-orders.*') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-cart-check"></i>
                        <p>Purchase Orders</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase fs-7 text-muted fw-bold mt-3 mb-1 px-2">Master Data</li>

                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link rounded {{ request()->routeIs('products.*') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-box-seam"></i>
                        <p>Products</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('suppliers.index') }}" class="nav-link rounded {{ request()->routeIs('suppliers.*') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-truck"></i>
                        <p>Suppliers</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link rounded {{ request()->routeIs('employees.*') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Employees</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('departments.index') }}" class="nav-link rounded {{ request()->routeIs('departments.*') ? 'active bg-primary text-white' : '' }}">
                        <i class="nav-icon bi bi-building"></i>
                        <p>Departments</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <div class="sidebar-footer p-3 border-top bg-white mt-auto">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('profile.edit') }}" class="d-flex align-items-center gap-2 text-decoration-none text-dark flex-grow-1 overflow-hidden me-2">
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 35px; height: 35px; font-weight: bold;">
                    {{ strtoupper(substr(Auth::user()->name ?? 'S', 0, 1)) }}
                </div>
                <div class="text-truncate">
                    <span class="d-block fw-bold fs-6 leading-tight">{{ Auth::user()->name ?? 'System Admin' }}</span>
                </div>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="m-0">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm border rounded-circle" style="width: 40px; height: 40px; border-radius: 50%;" title="Logout">
                    <i class="bi bi-box-arrow-right fs-5"></i>
                </button>
            </form>
        </div>
    </div>
</aside>