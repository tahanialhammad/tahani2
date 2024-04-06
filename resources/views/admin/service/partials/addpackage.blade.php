<!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#addPackageModal">
    <icon icon-name="add" Class="icon-md icon-dark"></icon>
</button>

<!-- Modal -->
<div class="modal fade" id="addPackageModal" tabindex="-1" aria-labelledby="addPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 mb-4 align-items-start">
                <h5 class="modal-title fw-bold" id="addPackageModalLabel">Modal title</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" role="form" action="{{ route('admin.addPackage') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-3 shadow-none @error('code') is-invalid @enderror" name="code" placeholder="Ppackage code ">
                        <div class="invalid-feedback">{{ $errors->first('code') }}</div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-3 shadow-none @error('info') is-invalid @enderror" name="info" placeholder="Package information "></textarea>
                        <div class="invalid-feedback">{{ $errors->first('info') }}</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark rounded-pill px-4 fw-bold text-capitalize border-2 me-2 shadow-none" data-bs-dismiss="modal">cancel
                        </button>
                        <button type="submit" class="btn btn-dark rounded-pill px-4 fw-bold border-2 me-0 shadow-none" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">
                            Save
                            <icon icon-name="back" Class="icon-md icon-inverted icon-rotate ms-2"></icon>
                        </button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>