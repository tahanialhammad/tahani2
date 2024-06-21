<!-- Button trigger modal -->
<a type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#addInvoiceToOrderModal-{{ $order->id }}">
<icon icon-name="invoices" class="icon icon-light"></icon>
</a>

<!-- Modal -->
<div class="modal fade" id="addInvoiceToOrderModal-{{ $order->id }}" tabindex="-1" aria-labelledby="addInvoiceToOrderModalLabel-{{ $order->id }}" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header border-0 mb-4 align-items-start">
        <h3 class="modal-title fw-bold" id="addInvoiceToOrderModalLabel-{{ $order->id }}">Add invoice to order ID {{$order->id}}</h3>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" role="form" action="{{ route('admin.order.addInvoiceToOrder', ['order' =>$order->id] )}}">
          @csrf
          <div class="mb-3 d-flex flex-row gap-2">
            <input type="number"class="form-control" name="price" value="{{ $order->price / $order->payment_parts }}" min="0">
            <input type="number"class="form-control" name="payment_parts" min="0" max="10" placeholder="Max payment_parts is {{ $order->payment_parts}} ">
          </div>

          <div class="modal-footer border-0 pt-2">
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 fw-bold text-capitalize border-2 me-2 shadow-none" data-bs-dismiss="modal">cancel
            </button>
            <button type="submit" class="btn btn-dark rounded-pill px-4 fw-bold border-2 me-0 shadow-none">
              Save
              <icon icon-name="back" Class="icon-md icon-inverted icon-rotate ms-2"></icon>
            </button>
          </div>
        </form>
    </div>
  </div>
</div>