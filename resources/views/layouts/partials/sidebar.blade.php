<div id="sidebar-wrapper" class="bg-white shadow-sm d-flex flex-column">

    <div class="sidebar-brand border-bottom p-3">
        <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
            <div class="bg-primary text-white rounded d-flex align-items-center justify-content-center shadow-sm"
                style="width: 30px; height: 30px;">
                <i class="bi bi-box-seam-fill fs-6"></i>
            </div>
            <span class="fw-bold fs-5">Fleek <span class="text-primary">ERP</span></span>
        </a>
    </div>

    <div class="list-group list-group-flush flex-grow-1 overflow-auto p-2">

        <a href="{{ route('dashboard') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-speedometer2 me-3 fs-5"></i> Dashboard
        </a>

        <div class="text-uppercase text-muted fw-bold small mt-3 mb-2 px-2"
            style="font-size: 0.75rem; letter-spacing: 0.5px;">Procurement</div>

        <a href="{{ route('requisitions.index') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('requisitions.*') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-file-earmark-text me-3 fs-5"></i> Requisitions
        </a>
        <a href="{{ route('purchase-orders.index') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('purchase-orders.*') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-cart-check me-3 fs-5"></i> Purchase Orders
        </a>

        <div class="text-uppercase text-muted fw-bold small mt-3 mb-2 px-2"
            style="font-size: 0.75rem; letter-spacing: 0.5px;">Master Data</div>

        <a href="{{ route('products.index') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('products.*') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-box-seam me-3 fs-5"></i> Products
        </a>
        <a href="{{ route('suppliers.index') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('suppliers.*') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-truck me-3 fs-5"></i> Suppliers
        </a>
        <a href="{{ route('employees.index') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('employees.*') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-people me-3 fs-5"></i> Employees
        </a>
        <a href="{{ route('departments.index') }}"
            class="list-group-item list-group-item-action rounded border-0 mb-1 d-flex align-items-center {{ request()->routeIs('departments.*') ? 'active bg-primary text-white' : 'text-secondary' }}">
            <i class="bi bi-building me-3 fs-5"></i> Departments
        </a>
    </div>

    <!-- Sidebar Footer -->
    <div class="p-3 border-top bg-white mt-auto d-flex align-items-center justify-content-between">
        <a href="{{ route('profile.edit') }}"
            class="d-flex align-items-center gap-2 text-decoration-none text-dark flex-grow-1 overflow-hidden">
            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                style="width: 35px; height: 35px; font-weight: bold;">
                {{ strtoupper(substr(Auth::user()->name ?? 'S', 0, 1)) }}
            </div>
            <div class="text-truncate">
                <span class="d-block fw-bold"
                    style="font-size: 0.85rem;">{{ Auth::user()->name ?? 'System Admin' }}</span>
            </div>
        </a>
        <form method="POST" action="{{ route('logout') }}" class="m-0">
            @csrf
            <button type="submit"
                class="btn btn-outline-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                style="width: 35px; height: 35px;" title="Logout">
                <i class="bi bi-box-arrow-right"></i>
            </button>
        </form>
    </div>
</div>
