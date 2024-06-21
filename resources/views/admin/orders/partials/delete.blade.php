<!-- <form method="POST" action="{{ route('admin.order.deleteOrder', $order->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" name="delete" class="btn btn-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><lin x1="14" y1="11" x2="14" y2="17"></lin></svg>
    </button>
</form> -->


<!-- <a href="{{ route('admin.order.deleteOrder', $order->id) }}" data-method="delete" id="delete-user" title="delete" data-bs-custom-class="tooltip-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-confirm="are you sure" data-message='delete order' data-confirmbuttontext=" yes " data-cancelbuttontext="Cancel">
    <icon icon-name="delete" class="icon icon-light"></icon>
</a> -->



<form-crud-handler action="{{ route('admin.order.deleteOrder', $order->id) }}" confirm="Are you sure you want to delete this order?" confirmButtonText="Yes" cancelButtonText="Cancel" message="Delete order">
    <button type="submit" class="btn btn-link p-0">
        <icon icon-name="trash" class="icon icon-light"></icon>
    </button>
</form-crud-handler>