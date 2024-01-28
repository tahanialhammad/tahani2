<a href="{{ route('admin.service.index').'#' .$serviceItem->id }}" class="card mb-3 p-4">
    <div class="card-body p-0">
        <div class="card-title fw-bold m-0"> {{ $serviceItem->title }}</div>
        <div class="card-text fs-sm xcore-truncate">
            {{ $serviceItem->body }}
        </div>

        <div class="text-muted fs-sm fw-bold mt-3">{{ $serviceItem->created_at->format('d M Y') }}</div>
    </div>
</a>
