<div class="ps-4">
    <div class="accordion bg-transparent" id="accordionFAQ-{{ $section->id }}">

        @foreach($section->faq->sortBy('sort_order') as $faq)
            <div class="accordion-item bg-transparent border-0 col-12 col-xl-10 py-2 pe-4">
                <h2 class="accordion-header" id="heading-{{$faq->id}}">
                    <button id="btn-{{$faq->id}}" class="accordion-button collapsed shadow-none bg-transparent fw-bold pb-2"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$faq->id}}" aria-expanded="false" aria-controls="collapse-{{$faq->id}}">
                        {{ $faq->question }}
                    </button>
                </h2>
                <div id="collapse-{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$faq->id}}" data-bs-parent="#accordionFAQ-{{ $section->id }}">
                    <div class="accordion-body p-0 pt-2">
                        {!! nl2br($faq->answer) !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
