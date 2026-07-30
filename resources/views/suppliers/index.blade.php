@extends('layouts.dashboard')
@section('content')
    <main class="app-main" id="main" tabindex="-1">
        <div class="app-content-header">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="mb-0 fs-3">Suppliers</h1>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
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
                        <h5 class="fw-bold text-dark mb-0">Supplier Management</h5>
                        <small class="text-muted">Manage all suppliers efficiently</small>
                    </div>

                    <div class="d-flex align-items-center gap-2 ms-auto">
                        @if (isset($trashCount) && $trashCount > 0)
                            <a href="{{ route('suppliers.trash') }}"
                                class="btn btn-outline-secondary d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 shadow-sm">
                                <i class="bi bi-trash3"></i>
                                <span class="fw-semibold">Recycle Bin</span>
                                <span class="badge bg-danger rounded-pill px-2 py-1 ms-1">{{ $trashCount }}</span>
                            </a>
                        @endif

                        <a href="javascript:void(0)"
                            class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 shadow-sm create-btn"
                            data-url="{{ route('suppliers.create') }}">
                            <i class="bi bi-plus-lg"></i>
                            <span class="fw-semibold">Add Supplier</span>
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
                                                <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold fs-7"
                                                    style="width: 32px; height: 32px;">
                                                    {{ substr($supplier->name, 0, 1) }}
                                                </div>
                                                <span class="fw-semibold text-dark">{{ $supplier->name }}</span>
                                            </div>
                                        </td>
                                        <td class="text-start"><a href="tel:{{ $supplier->phone }}"><span
                                                    class="badge bg-light text-dark border px-2 py-1">{{ $supplier->phone }}</span></a>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end gap-1">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-sm btn-light text-primary border rounded-2 p-1 px-2 edit-btn"
                                                    data-url="{{ route('suppliers.edit', $supplier->id) }}" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <form action="{{ route('suppliers.destroy', $supplier->id) }}"
                                                    method="POST" class="d-inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        class="btn btn-sm btn-light text-danger border rounded-2 p-1 px-2 delete-btn"
                                                        title="Delete">
                                                        <i class="bi bi-trash3"></i>
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
    <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="create-modal-content">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="edit-modal-content">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.create-btn', function() {
            let url = $(this).data('url');
            $.get(url, function(data) {
                $('#create-modal-content').html(data);
                $('#createModal').modal('show');
            });
        });
        $(document).on('click', '.edit-btn', function() {
            let url = $(this).data('url');
            $.get(url, function(data) {
                $('#edit-modal-content').html(data);
                $('#editModal').modal('show');
            });
        });
    </script>
@endpush
