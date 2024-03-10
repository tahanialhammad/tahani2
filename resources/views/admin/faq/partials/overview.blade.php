@forelse($sections as $section)
<div class="card mb-2 p-4">
    <div class="card-body">
        <h5 class="card-title">{{ $section->name }}</h5>
        <div>

            <div class="accordion accordion-flush" id="accordionFlush-{{ $section->id }}">
                @foreach ($section->faq as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading-{{ $faq->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $faq->id }}" aria-expanded="false" aria-controls="flush-collapse-{{ $faq->id }}">
                            {{ $faq->question }}
                        </button>
                    </h2>
                    <div id="flush-collapse-{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading-{{ $faq->id }}" data-bs-parent="#accordionFlush-{{ $section->id }}">
                        <div class="accordion-body">{{ $faq->answer }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@empty

{{ trans('helpcenter.no-faq')}}

@endforelse