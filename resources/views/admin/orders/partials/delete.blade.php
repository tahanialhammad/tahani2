<!-- <form method="POST" action="{{ route('admin.order.deleteOrder', $order->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" name="delete" class="btn btn-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><lin x1="14" y1="11" x2="14" y2="17"></lin></svg>
    </button>
</form> -->


<a href="{{ route('admin.order.deleteOrder', $order->id) }}" data-method="delete" id="delete-user" title="{{ trans('xcorev2.delete') }}" data-bs-custom-class="tooltip-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-confirm="{{ trans('xcore.are_you_sure') }}" data-message='vvvvvvvvvvvvvvvvvv' data-confirmbuttontext="{{ trans('xcorev2.yes_remove') }}" data-cancelbuttontext="{{ trans('xcorev2.cancel') }}">
    <svg id="icon-close" class="icon icon-light" viewBox="0 0 13.5 13.5">
        <path d="M13.3.2c-.3-.3-.8-.3-1.1 0L6.8 5.7 1.3.2C1-.1.5-.1.2.2s-.3.8 0 1.1l5.5 5.5-5.5 5.5c-.3.3-.3.8 0 1.1.1.1.3.2.5.2s.4-.1.5-.2l5.5-5.5 5.5 5.5c.1.1.3.2.5.2s.4-.1.5-.2c.3-.3.3-.8 0-1.1L7.8 6.8l5.5-5.5c.3-.3.3-.8 0-1.1z" />
    </svg>
</a>