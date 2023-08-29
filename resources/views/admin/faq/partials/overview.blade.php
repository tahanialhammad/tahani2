@forelse($sections as $section)

<div class="card" style="width: 18rem;">
    <div class="card-body">


        <div class="accordion" id="accordion-{{ $section->id }}">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $section->name }}
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-{{ $section->id }}">
                <div class="accordion-body">
                    <ul class="list-group">
                        @foreach($section->faq as $faq)
                        <li class="list-group-item">{{ $faq->question }} > {{ $faq->answer }}</li>
                        @endforeach
                      </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
@empty

no faq

@endforelse