@extends('layouts.dashboard')
@section('content')
    <main class="app-main" id="main" tabindex="-1">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="mb-0 fs-3">Recycle Bin</h1>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Recycle Bin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                <div
                    class="card-header bg-white py-3 border-bottom d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h5 class="fw-bold text-dark mb-0">Deleted Suppliers</h5>
                        <small class="text-muted">Manage deleted suppliers, restore them or permanently delete them</small>
                    </div>

                    <div class="ms-auto">
                        <a href="{{ route('suppliers.index') }}"
                            class="btn btn-outline-primary d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 shadow-sm">
                            <i class="bi bi-arrow-left"></i>
                            <span class="fw-semibold">Back to Suppliers</span>
                        </a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive p-3">
                        <table id="myTable" class="table table-hover align-middle mb-0 w-100">
                            <thead class="table-light text-uppercase fs-7 text-muted">
                                <tr>
                                    <th class="py-3 text-start" width="5%">#</th>
                                    <th class="py-3">Name</th>
                                    <th class="py-3 text-start">Phone</th>
                                    <th class="py-3 text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center fw-bold fs-7"
                                                    style="width: 32px; height: 32px;">
                                                    {{ substr($supplier->name, 0, 1) }}
                                                </div>
                                                <span class="fw-semibold text-dark">{{ $supplier->name }}</span>
                                            </div>
                                        </td>
                                        <td class="text-start">
                                            <a href="tel:{{ $supplier->phone }}">
                                                <span
                                                    class="badge bg-light text-dark border px-2 py-1">{{ $supplier->phone }}</span>
                                            </a>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end gap-1">
                                                <form action="{{ route('suppliers.restore', $supplier->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-light text-success border rounded-2 p-1 px-2"
                                                        title="Restore Supplier">
                                                        <i class="bi bi-arrow-counterclockwise"></i> Restore
                                                    </button>
                                                </form>

                                                <form action="{{ route('suppliers.forceDelete', $supplier->id) }}"
                                                    method="POST" class="d-inline force-delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        class="btn btn-sm btn-light text-danger border rounded-2 p-1 px-2 force-delete-btn"
                                                        title="Permanent Delete">
                                                        <i class="bi bi-trash-fill"></i> Delete Forever
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
@endpush
