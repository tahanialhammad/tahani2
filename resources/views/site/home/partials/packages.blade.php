    {{-- Packages --}}
    <div class="app-store col-10 mx-auto p-4">
        <h1 class="fw-bold text-center mb-5">
            {{ trans('packages.our-packages') }}
        </h1>
        <div class="packages row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-4">
            @forelse($packages as $package)
            <div class="col">
                <div class="card h-100 p-4 text-center bg-light">
                    <img src="/images/packages/{{ $package->code }}.svg" class="mx-auto p-3" style="width: 100px; height: 100px; background-color: rgb(248, 248, 250)">

                    <div class="card-body px-0 py-3">
                        <h6 class="card-title fw-bold mb-0">
                            {{ $package->code }}
                        </h6>
                    </div>

                    <div class="card-footer border-0 bg-transparent p-0">
                        <div class="d-grid gap-2">

                            <a href="" class="btn btn-sm btn-outline-dark rounded-pill text-capitalize border-2 fw-bold shadow-none">
                                example</a>

                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-link fs-sm" data-bs-toggle="modal" data-bs-target="#packageInfoModal-{{ $package->id }}">
                                {{ trans('general.more-info') }}
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="packageInfoModal-{{ $package->id }}" tabindex="-1" aria-labelledby="packageInfoModalLabel-{{ $package->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 mb-4 align-items-start">
                                            <h3 class="modal-title fw-bold" id="packageInfoModalLabel-{{ $package->id }}"> {{ $package->code }}</h3>
                                            <button type="button" class="btn-close  shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $package->info }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    @empty
                    {{ trans('packages.no-package-available') }}
                    @endforelse
                </div>
            </div>