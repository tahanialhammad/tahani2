@extends('site.site-template')

@section('header')
    <div class="col-8 mx-auto my-4 py-5 bg-light rounded ">
        <h1 class="fw-bold text-center mb-4">
        {{ trans('helpcenter.help') }}
        </h1>
        <div>
            <real-time-search :faqs="{{ json_encode($allFaqs) }}"></real-time-search>
        </div>
    </div>
@stop

@section('content')
    <div class="helpcenter col-8 mx-auto">
        <div class="py-4">
            <h3 class="fw-bold text-center mb-4">Categories</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 g-lg-5 bg">
                @forelse($sections->sortBy('sort_order') as $section)
                    <div class="col">
                        <a href="">
                            <div class="card h-100 text-center shadow">
                                <div class="card-body py-5 ">
                                    <icon icon-name="home" class="icon-xxl icon-light mb-5"></icon>
                                    <h4 class="card-title fw-bold">{{ $section->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                {{ trans('helpcenter.no-faq') }}
                @endforelse
            </div>
        </div>
    </div>
@stop
