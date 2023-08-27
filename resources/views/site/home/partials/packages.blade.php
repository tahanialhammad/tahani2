    {{-- Packages --}}
    <div class="app-store p-0 pt-2">
        <div class="liveSearchBar row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-4">
            @forelse($packages as $package)
                <div class="col">
                    <div class="card h-100 p-4 text-center">
                        <img src="/images/packages/{{ $package->code }}.svg" class="mx-auto p-3" style="background-color: red">

                        <div class="card-body px-0 py-3">
                            <h6 class="card-title fw-bold mb-0">
                                {{ $package->code }}
                            </h6>
                        </div>

                        <div class="card-footer border-0 bg-transparent p-0">
                            <span class="badge rounded-pill bg-secondary">
                                info
                            </span>
                        </div>

                        <p class="card-text my-2">price</p>

                        <div class="d-grid gap-2">

                            <a href=""
                                class="btn btn-sm btn-outline-dark rounded-pill text-capitalize border-2 fw-bold shadow-none">
                                example</a>

                            <a href="" class="fs-sm" target="_blank">
                                more info
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                no package
            @endforelse
        </div>
    </div>