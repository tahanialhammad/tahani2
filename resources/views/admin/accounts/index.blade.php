@extends('admin.admin-template')
@section('content')
<div>
    <div class="page-title d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0"> All accounts</h3>

        @include('admin.accounts.partials.create')
    </div>
    <div class="row p-0 g-0">
        <div class="col-xl-9">
            <div class="card mb-3 p-4">
                <div class="card-body p-0">
                    <h5 class="card-title mb-3 fw-bold">Accounts</h5>
                    <div class="card-text">
                        @include('admin.accounts.partials.overview')
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop