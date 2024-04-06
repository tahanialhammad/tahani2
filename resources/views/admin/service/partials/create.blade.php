<!-- Button trigger modal -->
<a type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#addServiceModal">
  <icon icon-name="addLarg" class="icon-xxl icon-dark"></icon>
</a>


<!-- Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header border-0 mb-4 align-items-start">
        <h3 class="modal-title fw-bold" id="addServiceModalLabel">Add new service</h3>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form method="POST" role="form" action="{{ route('admin.service.addOrEditService') }}">
          @csrf

          <div class="mb-3">
            <input type="text" class="form-control rounded-3 shadow-none @error('title') is-invalid @enderror" name="title" placeholder="Service title">
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
          </div>

          <div class="mb-3">
            <textarea class="form-control rounded-3 shadow-none @error('body') is-invalid @enderror" name="body" placeholder="Service information"></textarea>

            <div class="invalid-feedback">{{ $errors->first('body') }}</div>

            <div class="mb-3">
              <!-- <select class="form-select" aria-label="Select Packages" name="packageId" > -->
              <select class="form-select" aria-label="Select Packages" name="packageIds[]" multiple>
                @foreach ($packages as $package)
                <option value="{{ $package->id }}">{{ $package->code }}</option>
                @endforeach
              </select>
            </div>
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