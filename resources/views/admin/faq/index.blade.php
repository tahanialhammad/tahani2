@extends('admin.admin-template')
@section('content')
    <div class="admin-helpcenter d-flex">
        <div class="col-6 me-4">
            @include('admin.faq.partials.overview')
        </div>
        <div class="col-6">
            @include('admin.faq.partials.addSection')
            @include('admin.faq.partials.addFaqToSection')
        </div>
    </div>
@stop
