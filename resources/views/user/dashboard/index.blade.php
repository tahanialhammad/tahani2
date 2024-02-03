@extends('user.user-template')


@section('content')
{{-- @include('snippets.flash') --}}
<div id="dashboard">
    <div class="col-xl-9 page-title pt-4 ps-4">
        <h3 class="fw-bold m-0">
            Hallo {{ \Auth::user()->name }}
        </h3>
    </div>


    <div class="row g-0">
        <div class="col-xl-9 p-4">
            @include('user.dashboard.partials.overview')
            @include('user.dashboard.partials.invoices')
        </div>

        <div class="col-xl-3 px-lg-4 p-4">
            @include('user.dashboard.partials.news')
        </div>
    </div>
</div>
@stop