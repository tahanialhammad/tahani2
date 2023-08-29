<div class="card p-4">
    <div class="card-body">
        <h5 class="card-title">Add FAQ section</h5>
        <div>
            <form method="POST" role="form" action="{{ route('admin.faq.addOrEditSection') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" class="form-control rounded-3 shadow-none @error('name') is-invalid @enderror"
                        name="name" placeholder="Section name" value="{{ old('name') }}">
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                </div>

                <div class="mb-3">
                    <input type="number"
                        class="form-control rounded-3 shadow-none @error('sortOrder') is-invalid @enderror"
                        name="sortOrder">
                    <div class="invalid-feedback">{{ $errors->first('sortOrder') }}</div>
                </div>

                <div class="text-end pt-3">
                    <button type="submit" class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
                     Add section
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
