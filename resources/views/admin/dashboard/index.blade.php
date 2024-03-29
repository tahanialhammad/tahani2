@extends('admin.admin-template')

@section('content')
{{-- @include('snippets.flash') --}}
<div id="dashboard" >
    <div class="col-xl-9 bg-image-light">
        <h3 class="fw-bold m-0">
            Hallo {{ \Auth::user()->name }}
        </h3>
    </div>

    <div class="row g-0">
        <div class="col-xl-9 bg-image-light py-4">
            @include('admin.dashboard.partials.overview')
            @include('admin.dashboard.partials.invoices')
        </div>

        <div class="col-xl-3 px-lg-4 py-4">
            @include('admin.dashboard.partials.newestServices')
            @include('admin.dashboard.partials.newestOrders')
        </div>
    </div>
</div>
@stop