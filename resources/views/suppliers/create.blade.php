<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label fw-semibold text-dark">Supplier Name <span
                class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control border-start-0 @error('name') is-invalid @enderror" id="name"
                name="name" value="{{ old('name') }}" placeholder="Enter supplier name" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label fw-semibold text-dark">Phone Number <span
                class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-telephone"></i></span>
            <input type="text" class="form-control border-start-0 @error('phone') is-invalid @enderror"
                id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number" required>
        </div>
    </div>

    <div class="d-flex justify-content-end gap-2 border-top pt-3">
        <a href="{{ route('suppliers.index') }}" class="btn btn-light px-4 rounded-3 fw-semibold">Cancel</a>
        <button type="submit"
            class="btn btn-primary px-4 rounded-3 shadow-sm fw-semibold d-flex align-items-center gap-2">
            <i class="bi bi-check-lg"></i> Save Supplier
        </button>
    </div>

</form>
