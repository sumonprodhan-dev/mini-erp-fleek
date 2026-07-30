<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label fw-semibold text-dark">Product Name <span
                class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-box-seam"></i></span>
            <input type="text" class="form-control border-start-0 @error('name') is-invalid @enderror" id="name"
                name="name" value="{{ old('name', $product->name) }}" placeholder="Enter product name" required>
        </div>
        @error('name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="sku" class="form-label fw-semibold text-dark">SKU <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-upc-scan"></i></span>
            <input type="text" class="form-control border-start-0 @error('sku') is-invalid @enderror" id="sku"
                name="sku" value="{{ old('sku', $product->sku) }}" placeholder="Enter product SKU" required>
        </div>
        @error('sku')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="unit" class="form-label fw-semibold text-dark">Unit <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-tag"></i></span>
            <input type="text" class="form-control border-start-0 @error('unit') is-invalid @enderror" id="unit"
                name="unit" value="{{ old('unit', $product->unit) }}" placeholder="e.g. Pcs, Kg, Box" required>
        </div>
        @error('unit')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="current_stock" class="form-label fw-semibold text-dark">Current Stock <span
                class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-stack"></i></span>
            <input type="number" class="form-control border-start-0 @error('current_stock') is-invalid @enderror"
                id="current_stock" name="current_stock" value="{{ old('current_stock', $product->current_stock) }}"
                placeholder="Enter current stock" min="0" required>
        </div>
        @error('current_stock')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-flex justify-content-end gap-2 border-top pt-3">
        <a href="{{ route('products.index') }}" class="btn btn-light px-4 rounded-3 fw-semibold">Cancel</a>
        <button type="submit"
            class="btn btn-primary px-4 rounded-3 shadow-sm fw-semibold d-flex align-items-center gap-2">
            <i class="bi bi-check-lg"></i> Update Product
        </button>
    </div>

</form>
