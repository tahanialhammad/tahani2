<div class="card p-4">
    <div class="card-body">
        <h5 class="card-title">Add FAQ to a section</h5>
        <div>
            <form method="POST" role="form" action="{{ route('admin.faq.addOrEditFaq') }}">
                @csrf

                <div class="mb-3">
                    <select name="section" class="form-select shadow-none" required>
                        <option selected>Open to select section</option>
                        @foreach ($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control rounded-3 shadow-none @error('question') is-invalid @enderror"
                        name="question" placeholder="Question tilte" value="{{ old('question') }}">
                    <div class="invalid-feedback">{{ $errors->first('question') }}</div>
                </div>

                <div class="mb-3">
                    <input type="number"
                        class="form-control rounded-3 shadow-none @error('sortOrder') is-invalid @enderror"
                        name="sortOrder">
                    <div class="invalid-feedback">{{ $errors->first('sortOrder') }}</div>
                </div>
                
                <div class="mb-3">
                    <textarea type="text"
                        class="form-control rounded-3 shadow-none @error('answer') is-invalid @enderror"
                        name="answer" placeholder="Question answer"></textarea>
                    <div class="invalid-feedback">{{ $errors->first('answer') }}</div>
                </div>

                <div class="text-end pt-3">
                    <button type="submit"
                        class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
                        Add Faq
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
