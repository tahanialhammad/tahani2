@if(count($serviceItems))
    <div class="mb-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h5 class="fw-bold m-0">
            Newest services
            </h5>
            <a href="{{ route('admin.service.index') }}" class="link-dark fw-bold fs-sm text-decoration-underline">
             view all 
            </a>
        </div>

        @foreach($serviceItems as $serviceItem)
            @include('admin.dashboard.partials.serviceItem')
        @endforeach

    </div>
@endif