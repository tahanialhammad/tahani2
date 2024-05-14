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
<div class="helpcenter mx-xl-5 px-4 px-xl-5">
        <h1 class="text-center fw-bold py-4">{{ $section->name }}</h1>
        <div class="row py-4 px-lg-5">
            <div class="col-12 col-md-4 col-xl-3 ps-2 ps-md-5">
                @include('site.helpcenter.partials.subnav')
            </div>
            <div class="col-12 col-md-8 col-xl-9 ps-lg-5">
                @include('site.helpcenter.partials.faq')
            </div>
        </div>
    </div>
@stop
