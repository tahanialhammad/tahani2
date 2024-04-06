<h5 class="fw-bold">Available packages </h5>

@foreach ( $packages as $package)

<a class="btn btn-link" data-bs-toggle="modal" href="#showPackageModal-{{$package->id}}" role="button">
    <img src="/images/packages/{{ $package->code }}.svg" class="w-30" alt="{{$package->code}}">
</a>

<!-- Show Modal -->
<div class="modal fade" id="showPackageModal-{{$package->id}}" aria-hidden="true" aria-labelledby="showPackageModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 mb-4 align-items-start">
                <h5 class="modal-title fw-bold" id="showPackageModalLabel">{{ $package->code }} package</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <img src="/images/packages/{{ $package->code }}.svg" class="w-30" alt="{{$package->code}}">
                </div>
                {{ $package->info }}
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('admin.deletePackage', $package->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="delete" class="btn btn-outline-dark rounded-pill px-4 fw-bold text-capitalize border-2 me-2 shadow-none">
                        Delete <icon icon-name="delete" class="icon icon-dark"></icon>
                    </button>
                </form>

                <button type="button" class="btn btn-outline-dark rounded-pill px-4 fw-bold text-capitalize border-2 me-2 shadow-none" data-bs-dismiss="modal">cancel
                </button>
                <button type="submit" class="btn btn-dark rounded-pill px-4 fw-bold border-2 me-0 shadow-none" data-bs-target="#editPackageModal-{{$package->id}}" data-bs-toggle="modal" data-bs-dismiss="modal">
                    Edit package
                    <icon icon-name="back" Class="icon-md icon-inverted icon-rotate ms-2"></icon>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal-->
<div class="modal fade" id="editPackageModal-{{$package->id}}" aria-hidden="true" aria-labelledby="editPackageModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPackageModalLabel">Edit {{$package->code}} </h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" role="form" action="{{ route('admin.editOrDeletePackage', ['package' =>  $package->id] ) }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $package->id }}">

                    <div class="mb-3">
                        <input type="text" class="form-control rounded-3 shadow-none @error('code') is-invalid @enderror" name="code" value="{{ $package->code }}">
                        <div class="invalid-feedback">{{ $errors->first('code') }}</div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-3 shadow-none @error('info') is-invalid @enderror" name="info" value="{{ $package->info }}"></textarea>

                        <div class="invalid-feedback">{{ $errors->first('info') }}</div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-dark rounded-pill px-4 fw-bold text-capitalize border-2 me-2 shadow-none" data-bs-target="#showPackageModal-{{$package->id}}" data-bs-toggle="modal" data-bs-dismiss="modal">
                            Previous
                        </button>

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
@endforeach