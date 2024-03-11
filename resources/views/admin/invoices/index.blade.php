@extends('admin.admin-template')
@section('content')
    <div class="d-flex">
        <div class="col-6 me-4">
        invoices
            @include('admin.invoices.partials.overview')
        </div>
        <div class="col-6">
            @include('admin.invoices.partials.addInvoice')
        </div>
    </div>
@stop
