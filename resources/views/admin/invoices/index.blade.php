@extends('admin.admin-template')
@section('content')
    <div class="d-flex">
        <div class="col-9 me-4">
            @include('admin.invoices.partials.overview')
        </div>
        <div class="col-3">
            @include('admin.invoices.partials.addInvoice')
        </div>
    </div>
@stop
