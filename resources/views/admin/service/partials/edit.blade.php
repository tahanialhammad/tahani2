<!-- Button trigger modal -->
<a type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#editServiceModal-{{ $serviceItem->id }}">
  <icon icon-name="edit" class="icon icon-dark"></icon>
</a>

<!-- Modal -->
<div class="modal fade" id="editServiceModal-{{ $serviceItem->id }}" tabindex="-1" aria-labelledby="editServiceModalLabel-{{ $serviceItem->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header border-0 mb-4 align-items-start">
        <h3 class="modal-title fw-bold" id="editServiceModalLabel-{{ $serviceItem->id }}">Edit service</h3>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form method="POST" role="form" action="{{ route('admin.service.addOrEditService') }}">
          @csrf
          <input type="hidden" name="id" value="{{ $serviceItem->id }}">
          <div class="mb-3">
            <input type="text" class="form-control rounded-3 shadow-none @error('title') is-invalid @enderror" name="title" value="{{ $serviceItem->title }}">
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
          </div>

          <div class="mb-3">
            <input type="number" class="form-control rounded-3 shadow-none @error('price') is-invalid @enderror" name="price" step="0.01" min="0" max="9999" value="{{ $serviceItem->price }}">
            <div class="invalid-feedback">{{ $errors->first('price') }}</div>
          </div>

          <div class="mb-3">
            <textarea class="form-control rounded-3 shadow-none @error('body') is-invalid @enderror" name="body" value="{{ $serviceItem->body }}"></textarea>
            <div class="invalid-feedback">{{ $errors->first('body') }}</div>
          </div>

          <div class="mb-3">
              <select class="form-select" aria-label="Select Packages" name="packageIds[]" multiple>
                @foreach ($packages as $package)
                <option value="{{ $package->id }}">{{ $package->code }}</option>
                @endforeach
              </select>
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