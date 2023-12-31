
@extends('admin.admin-template')


@section('content')
{{-- @include('snippets.flash') --}}
<div id="dashboard">
    <div class="col-xl-9 page-title-v2 pt-4 ps-4">
        <h3 class="fw-bold m-0">
            Hallo {{ \Auth::user()->name }}
        </h3>
    </div>


    <div class="row g-0">
        <div class="col-xl-9 p-4">
            @include('admin.dashboard.partials.overview')
            @include('admin.dashboard.partials.invoices')
        </div>


        <div class="col-xl-3 px-lg-4 p-4">
            {{-- @include('v2.user.dashboards.portlets.news')


            @include('v2.user.dashboards.portlets.faq') --}}
        </div>
    </div>
</div>
@stop
