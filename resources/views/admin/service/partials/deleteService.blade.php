<form method="POST" action="{{ route('admin.service.deleteService', $serviceItem->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-link">
        <icon icon-name="delete" class="icon icon-dark"></icon>
    </button>
</form>