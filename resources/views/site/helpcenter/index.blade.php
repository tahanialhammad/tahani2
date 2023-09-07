@extends('site.site-template')

@section('header')
    <div class="col-8 mx-auto my-4 py-5 bg-light rounded ">
        <h1 class="fw-bold text-center mb-4">How can we help you?</h1>
        <div>
            <real-time-search :faqs="{{ json_encode($allFaqs) }}"></real-time-search>
        </div>
    </div>
@stop

@section('content')
content
@stop
