@extends('user.user-template')


@section('content')
<div>
    <h1>user my orders</h1>
    @forelse($orders as $order)
    <div class="p-3 bg-white border border-info d-flex mb-2 rounded ">
        <div>{{$order->id}}</div>
    </div>
    @empty
    <div class="d-flex flex-column justify-content-center align-items-center w-50 mx-auto" style="height: 75vh;">
        <h3 class="fw-bold">{{ trans('services.no-orders')}}</h3>

        <img src="/images/empty-box.svg" class="w-25 my-4" alt="no orders">

        <div class="">
        <button class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
            Add service
        </button>
        </div>
    </div>
    @endforelse
</div>
@stop