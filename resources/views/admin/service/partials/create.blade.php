<!-- Button trigger modal -->
<a type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">

  <svg id="icon-add-large" class="icon-xxl icon-dark" viewBox="0 0 40 40">
    <path d="M26.5 18.7h-5.8V13c0-.4-.3-.8-.8-.8s-.8.3-.8.8v5.8h-5.8c-.4 0-.8.3-.8.8s.3.8.8.8h5.8V26c0 .4.3.8.8.8s.8-.3.8-.8v-5.8h5.8c.4 0 .8-.3.8-.8s-.4-.7-.8-.7z" />
    <path d="M20 0C9 0 0 9 0 20s9 20 20 20 20-9 20-20S31 0 20 0zm0 38c-9.9 0-18-8.1-18-18S10.1 2 20 2s18 8.1 18 18-8.1 18-18 18z" />
  </svg>
</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header border-0 mb-4 align-items-start">
        <h3 class="modal-title fw-bold" id="createUserModalLabel">Add new service</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        <form method="POST" role="form" action="{{ route('admin.service.createService') }}">
          @csrf

          <div class="mb-3">
            <input type="text" class="form-control rounded-3 shadow-none @error('title') is-invalid @enderror" name="title" placeholder="Service title">
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
          </div>

          <div class="mb-3">
            <textarea type="text" class="form-control rounded-3 shadow-none @error('body') is-invalid @enderror" name="body" placeholder="Service information">
            </textarea>
            <div class="invalid-feedback">{{ $errors->first('body') }}</div>
          </div>
          <div class="modal-footer border-0 pt-2">
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 fw-bold text-capitalize border-2 me-2 shadow-none" data-bs-dismiss="modal">cancel
            </button>
            <button type="submit" class="btn btn-dark rounded-pill px-4 fw-bold border-2 me-0 shadow-none">
              Save
              <icon-back Class="icon-md icon-inverted icon-rotate ms-2"></icon-back>
            </button>
          </div>
        </form>
      </div>





    </div>
  </div>
</div>