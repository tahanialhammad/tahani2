<!-- Button trigger modal -->
<a type="button" data-bs-toggle="modal" data-bs-target="#editorderModal-{{ $order->id }}">
  <icon icon-name="edit" class="icon icon-light"></icon>
</a>

<!-- Modal -->
<div class="modal fade" id="editorderModal-{{ $order->id }}" tabindex="-1" aria-labelledby="editorderModalLabel-{{ $order->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header border-0 mb-4 align-items-start">
        <h3 class="modal-title fw-bold" id="editorderModalLabel-{{ $order->id }}">Edit order</h3>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form method="POST" role="form" action="{{ route('admin.order.editOrDeleteOrder', ['order' =>$order->id] )}}">
          @csrf
          <div class="mb-3 d-flex flex-row gap-2">
            <input type="number"class="form-control" name="price" value="{{ $order->price}}" min="0">
            <input type="number"class="form-control" name="status" value="{{ $order->status}}" min="0" max="10">
            <input type="time" class="form-control" name="work_hours" id="workhours" value="{{ $order->work_hours }}" pattern="[0-9]{2}:[0-9]{2}">
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
</div>