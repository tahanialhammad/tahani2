@extends('user.user-template')


@section('content')
{{-- @include('snippets.flash') --}}
<div id="user-dashboard">
    <div class="col my-4">
    @include('user.dashboard.partials.overview')
    </div>

    <div class="row g-0">
        <div class="col-xl-9 p-4">
            @include('user.dashboard.partials.invoices')
        </div>

        <div class="col-xl-3 px-lg-4 p-4">
            @include('user.dashboard.partials.news')
        </div>
    </div>
</div>
@stop