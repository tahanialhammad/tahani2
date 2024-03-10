    {{-- Packages --}}
    <div class="app-store col-10 mx-auto p-4">
        <h1 class="fw-bold text-center mb-5">
        {{ trans('packages.our-packages') }}  
       </h1>
        <div class="packages row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-4">
            @forelse($packages as $package)
                <div class="col">
                    <div class="card h-100 p-4 text-center bg-light">
                        <img src="/images/packages/{{ $package->code }}.svg" class="mx-auto p-3" style="background-color: rgb(248, 248, 250)">

                        <div class="card-body px-0 py-3">
                            <h6 class="card-title fw-bold mb-0">
                                {{ $package->code }}
                            </h6>
                        </div>

                        <div class="card-footer border-0 bg-transparent p-0">
                            <span class="badge rounded-pill bg-secondary">
                            {{ trans('general.info') }}  
                            </span>
                        </div>

                        <p class="card-text my-2">price</p>

                        <div class="d-grid gap-2">

                            <a href=""
                                class="btn btn-sm btn-outline-dark rounded-pill text-capitalize border-2 fw-bold shadow-none">
                                example</a>

                            <a href="" class="fs-sm" target="_blank">
                            {{ trans('general.more-info') }}  
                            </a>
                        </div>

                    </div>
                </div>
            @empty
            {{ trans('packages.no-package-available') }}  
            @endforelse
        </div>
    </div>