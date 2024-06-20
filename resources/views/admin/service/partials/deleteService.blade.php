<!-- <form method="POST" action="{{ route('admin.service.deleteService', $serviceItem->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-link">
        <icon icon-name="delete" class="icon icon-dark"></icon>
    </button>

</form> -->


<form-crud-handler action="{{ route('admin.service.deleteService', $serviceItem->id) }}" confirm="Are you sure you want to delete this service?" confirmButtonText="Yes" cancelButtonText="Cancel" message="Delete service">
    <button type="submit" class="btn btn-link">
        <icon icon-name="delete" class="icon icon-light"></icon>
    </button>
</form-crud-handler>